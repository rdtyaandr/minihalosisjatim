<?php
if (!function_exists('format_tanggal')) {
    function format_tanggal($date)
    {
        $fmt = new IntlDateFormatter(
            'id_ID',
            IntlDateFormatter::LONG,
            IntlDateFormatter::NONE,
            'Asia/Jakarta',
            IntlDateFormatter::GREGORIAN,
            'd MMMM yyyy'
        );
        return $fmt->format(new DateTime($date));
    }
}
