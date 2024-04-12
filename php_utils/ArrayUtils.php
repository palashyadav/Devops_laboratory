<?php
/**
 * Array utilities
 */

class ArrayUtils {
    public static function get($array, $key, $default = null) {
        return $array[$key] ?? $default;
    }

    public static function merge(...$arrays) {
        return array_merge(...$arrays);
    }

    public static function filter($array, $callback) {
        return array_filter($array, $callback);
    }

    public static function map($array, $callback) {
        return array_map($callback, $array);
    }

    public static function pluck($array, $key) {
        return array_column($array, $key);
    }
}
?>
