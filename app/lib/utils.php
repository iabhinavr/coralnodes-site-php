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

function _is_local(): bool {
    if (isset($_ENV['APP_ENV']) && $_ENV['APP_ENV'] === 'local') {
        return true;
    }
    return false;
}

function _asset_url_($rel_url) {
    if (isset($_ENV['APP_ENV']) && $_ENV['APP_ENV'] === 'local') {
        return $rel_url;
    }
    return CDN_URL . $rel_url;
}

function _cdn_(string $rel_url): string {
    return CDN_URL . $rel_url;
}