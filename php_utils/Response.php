<?php
/**
 * HTTP Response helper
 */

class Response {
    public static function json($data, $status = 200) {
        http_response_code($status);
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    public static function error($msg, $status = 400) {
        self::json(['error' => $msg], $status);
    }

    public static function success($data) {
        self::json(['success' => true, 'data' => $data]);
    }
}
?>
