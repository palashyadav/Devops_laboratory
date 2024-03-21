<?php
header('Content-Type: application/json');

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

switch ($uri) {
    case '/':
        echo json_encode(['message' => 'PHP Service - ready', 'version' => '1.0']);
        break;
    case '/status':
        echo json_encode(['status' => 'up', 'timestamp' => date('Y-m-d H:i:s')]);
        break;
    case '/ping':
        echo json_encode(['pong' => true]);
        break;
    case '/echo':
        $data = json_decode(file_get_contents('php://input'), true);
        echo json_encode(['echo' => $data ?? []]);
        break;
    default:
        http_response_code(404);
        echo json_encode(['error' => 'Not found']);
        break;
}
?>
