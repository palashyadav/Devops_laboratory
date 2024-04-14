<?php
/**
 * Date utilities
 */

class DateUtils {
    public static function now() {
        return date('Y-m-d H:i:s');
    }

    public static function today() {
        return date('Y-m-d');
    }

    public static function timestamp() {
        return time();
    }

    public static function format($time, $format = 'Y-m-d H:i:s') {
        return date($format, $time);
    }

    public static function diff($date1, $date2) {
        $t1 = strtotime($date1);
        $t2 = strtotime($date2);
        return abs($t1 - $t2) / 86400;
    }
}
?>
