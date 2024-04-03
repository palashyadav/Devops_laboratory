<?php
/**
 * Logger utility
 */

class Logger {
    private $level;

    public function __construct($level = 'info') {
        $this->level = $level;
    }

    public function info($msg) {
        echo "[INFO] $msg\n";
    }

    public function error($msg) {
        echo "[ERROR] $msg\n";
    }

    public function debug($msg) {
        if ($this->level === 'debug') {
            echo "[DEBUG] $msg\n";
        }
    }
}
?>
