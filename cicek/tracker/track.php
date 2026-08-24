<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

$logFile = 'logs.json';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    
    if (!$data || !isset($data['sessionId'])) {
        exit(json_encode(['status' => 'error', 'message' => 'No session ID']));
    }

    // Load existing logs
    $logs = file_exists($logFile) ? json_decode(file_get_contents($logFile), true) : [];
    
    $sessionId = $data['sessionId'];
    $currentTime = time();
    
    if (!isset($logs[$sessionId])) {
        // First entry for this visitor
        $logs[$sessionId] = [
            'id' => $sessionId,
            'ip' => $_SERVER['REMOTE_ADDR'],
            'browser' => $_SERVER['HTTP_USER_AGENT'],
            'referrer' => isset($data['referrer']) ? $data['referrer'] : 'Direct',
            'device' => isset($data['device']) ? $data['device'] : 'Unknown',
            'startTime' => $currentTime,
            'lastSeen' => $currentTime,
            'duration' => 0,
            'date' => date('Y-m-d')
        ];
    } else {
        // Update duration
        $logs[$sessionId]['lastSeen'] = $currentTime;
        $logs[$sessionId]['duration'] = $logs[$sessionId]['lastSeen'] - $logs[$sessionId]['startTime'];
    }

    // Save back to file
    file_put_contents($logFile, json_encode($logs, JSON_PRETTY_PRINT));
    echo json_encode(['status' => 'success']);
}
?>
