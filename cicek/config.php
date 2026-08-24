<?php
/**
 * Çiçəkxalı - Konfiqurasiya
 *
 * Lokal: .env faylı istifadə edə bilərsiniz (git-ə göndərilmir).
 * Hosting: eyni dəyişənləri server environment variables kimi verin.
 */

function env_value(string $key, string $default = ''): string
{
    static $env = null;

    if ($env === null) {
        $env = [];
        $envFile = __DIR__ . '/.env';

        if (is_file($envFile) && is_readable($envFile)) {
            $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach ($lines as $line) {
                $line = trim($line);
                if ($line === '' || str_starts_with($line, '#') || !str_contains($line, '=')) {
                    continue;
                }

                [$name, $value] = explode('=', $line, 2);
                $name = trim($name);
                $value = trim($value);

                if (($value[0] ?? '') === '"' && substr($value, -1) === '"') {
                    $value = substr($value, 1, -1);
                } elseif (($value[0] ?? '') === "'" && substr($value, -1) === "'") {
                    $value = substr($value, 1, -1);
                }

                $env[$name] = $value;
            }
        }
    }

    $serverValue = getenv($key);
    return $serverValue !== false ? $serverValue : ($env[$key] ?? $default);
}

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ||
            (isset($_SERVER['SERVER_PORT']) && (int) $_SERVER['SERVER_PORT'] === 443)
    ? 'https'
    : 'http';

$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$host = preg_replace('/:\d+$/', '', $host);

$configuredBaseUrl = rtrim(env_value('BASE_URL'), '/');
if ($configuredBaseUrl !== '') {
    define('BASE_URL', $configuredBaseUrl . '/');
} elseif (in_array($host, ['localhost', '127.0.0.1'], true)) {
    $projectDir = basename(__DIR__);
    define('BASE_URL', $protocol . '://' . $host . '/' . $projectDir . '/');
} elseif (str_ends_with($host, 'cicekxali.az')) {
    define('BASE_URL', 'https://cicekxali.az/');
} else {
    define('BASE_URL', $protocol . '://' . $host . '/');
}

define('SITE_NAME', env_value('SITE_NAME', 'Çiçəkxalı'));
define('CONTACT_PHONE', env_value('CONTACT_PHONE', '+994 55 409 20 01'));
define('WHATSAPP_LINK', env_value('WHATSAPP_LINK', 'https://wa.me/994554092001'));

define('CALLMEBOT_PHONE', env_value('CALLMEBOT_PHONE'));
define('CALLMEBOT_APIKEY', env_value('CALLMEBOT_APIKEY'));

define('ADMIN_USERNAME', env_value('ADMIN_USERNAME'));
define('ADMIN_PASSWORD_HASH', env_value('ADMIN_PASSWORD_HASH'));
