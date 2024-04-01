<?php
/**
 * Config helper for environment management
 */

class Config {
    private static $env = [];

    public static function load() {
        self::$env = [
            'APP_ENV' => getenv('APP_ENV') ?: 'development',
            'DEBUG' => getenv('DEBUG') ?: false,
            'LOG_LEVEL' => getenv('LOG_LEVEL') ?: 'info'
        ];
    }

    public static function get($key, $default = null) {
        self::load();
        return self::$env[$key] ?? $default;
    }
}

Config::load();
?>
