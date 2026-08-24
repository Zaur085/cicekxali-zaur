<?php
header('Content-Type: application/json');

$logFile = '../tracker/logs.json';

if (!file_exists($logFile)) {
    echo json_encode([]);
    exit;
}

$logs = json_decode(file_get_contents($logFile), true);

// Son girənlərə görə sıralayaq (Canlı axın üçün)
usort($logs, function($a, $b) {
    return $b['lastSeen'] - $a['lastSeen'];
});

echo json_encode(array_values($logs));
?>
