<?php
declare(strict_types=1);

require_once __DIR__ . '/../config.php';

header('Content-Type: application/json; charset=utf-8');

function json_response(string $status, string $message, int $code = 200): never
{
    http_response_code($code);
    echo json_encode(
        ['status' => $status, 'message' => $message],
        JSON_UNESCAPED_UNICODE
    );
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    json_response('error', 'Yanlış giriş.', 405);
}

$name     = trim(strip_tags((string) ($_POST['name'] ?? '')));
$tel      = trim(strip_tags((string) ($_POST['tel'] ?? '')));
$service  = trim(strip_tags((string) ($_POST['service_text'] ?? '')));
$size     = trim(strip_tags((string) ($_POST['size'] ?? 'Qeyd edilməyib')));
$district = trim(strip_tags((string) ($_POST['district_text'] ?? '')));
$message  = trim(strip_tags((string) ($_POST['message'] ?? 'Yoxdur')));

if ($name === '' || $tel === '') {
    json_response('error', 'Lütfən ad və telefon nömrəsini daxil edin.', 422);
}

if (CALLMEBOT_PHONE === '' || CALLMEBOT_APIKEY === '') {
    error_log('CallMeBot credentials are not configured.');
    json_response('error', 'Sifariş xidməti hazırda konfiqurasiya edilməyib. Zəhmət olmasa WhatsApp ilə əlaqə saxlayın.', 503);
}

$wa_msg  = "🚨 *YENİ SİFARİŞ (cicekxali.az)* 🚨\n\n";
$wa_msg .= "👤 *Müştəri:* {$name}\n";
$wa_msg .= "📞 *Telefon:* {$tel}\n";
$wa_msg .= "🏠 *Xidmət:* {$service}\n";
$wa_msg .= "📍 *Ünvan:* {$district}\n";
$wa_msg .= "📏 *Ölçü:* {$size}\n";
$wa_msg .= "📝 *Qeyd:* {$message}\n\n---";

$url = 'https://api.callmebot.com/whatsapp.php?' . http_build_query([
    'phone'  => CALLMEBOT_PHONE,
    'text'   => $wa_msg,
    'apikey' => CALLMEBOT_APIKEY,
]);

$ch = curl_init($url);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 15,
    CURLOPT_CONNECTTIMEOUT => 8,
    CURLOPT_FOLLOWLOCATION => true,
]);
$response = curl_exec($ch);
$error = curl_error($ch);
$httpCode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($response !== false && $error === '' && $httpCode >= 200 && $httpCode < 300) {
    json_response('success', 'Sifarişiniz uğurla qəbul edildi. Tezliklə sizinlə əlaqə saxlanılacaq!');
}

error_log("CallMeBot error: HTTP {$httpCode}; {$error}");
json_response('error', 'Sifariş göndərilərkən xəta baş verdi. Lütfən bir az sonra təkrar yoxlayın.', 502);
