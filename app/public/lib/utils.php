<?php

function _e($value) {
    return !empty($value) ? $value : "";
}
function iso_8601_date($sql_date) {
    $datetime = new DateTime($sql_date);

    $ist_timezone = new DateTimeZone('Asia/Kolkata');
    $datetime->setTimezone($ist_timezone);

    $iso_8601_date = $datetime->format('Y-m-d\TH:i:sP');
    return $iso_8601_date;
}

function _esc($string): string {
    return trim(string: htmlspecialchars(string: $string, flags: ENT_QUOTES, encoding: 'UTF-8'));
}