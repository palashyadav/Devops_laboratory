<?php
/**
 * Validation helpers
 */

class Validator {
    public static function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public static function validateUrl($url) {
        return filter_var($url, FILTER_VALIDATE_URL) !== false;
    }

    public static function validateInt($value) {
        return filter_var($value, FILTER_VALIDATE_INT) !== false;
    }

    public static function notEmpty($value) {
        return !empty(trim($value));
    }
}
?>
