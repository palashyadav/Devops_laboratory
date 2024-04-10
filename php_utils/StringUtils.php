<?php
/**
 * String utilities
 */

class StringUtils {
    public static function startsWith($haystack, $needle) {
        return strpos($haystack, $needle) === 0;
    }

    public static function endsWith($haystack, $needle) {
        return substr($haystack, -strlen($needle)) === $needle;
    }

    public static function contains($haystack, $needle) {
        return strpos($haystack, $needle) !== false;
    }

    public static function truncate($text, $length = 50) {
        return substr($text, 0, $length) . (strlen($text) > $length ? '...' : '');
    }

    public static function slugify($text) {
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $text), '-'));
    }
}
?>
