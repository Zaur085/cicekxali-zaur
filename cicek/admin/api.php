<?php
declare(strict_types=1);

session_start();
header('Content-Type: application/json; charset=utf-8');

$allowedFiles = [
    'index.php',
    'includes/header.php',
    'assets/css/style.css',
    'assets/css/pricing-buttons.css',
];

$file = (string) ($_GET['file'] ?? '');
if (!in_array($file, $allowedFiles, true)) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'İcazə verilməyən fayl.'], JSON_UNESCAPED_UNICODE);
    exit;
}

$path = realpath(__DIR__ . '/../' . $file);
$rootPath = realpath(__DIR__ . '/..');

if ($path === false || $rootPath === false || !str_starts_with($path, $rootPath . DIRECTORY_SEPARATOR)) {
    http_response_code(404);
    echo json_encode(['success' => false, 'message' => 'Fayl tapılmadı.'], JSON_UNESCAPED_UNICODE);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Content-Type: text/plain; charset=utf-8');
    echo file_get_contents($path);
    exit;
}

http_response_code(405);
echo json_encode(['success' => false, 'message' => 'Redaktə endpoint-i təhlükəsizlik səbəbilə söndürülüb. Faylları VS Code/Git ilə dəyişin.'], JSON_UNESCAPED_UNICODE);
