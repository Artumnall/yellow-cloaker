<?php

namespace Sinergi\BrowserDetector;

class OsDetector
{
    public static function detect(string $userAgent): string
    {
        if (preg_match('/linux/i', $userAgent)) {
            return 'Linux';
        } elseif (preg_match('/macintosh|mac os x/i', $userAgent)) {
            return 'Mac';
        } elseif (preg_match('/windows|win32/i', $userAgent)) {
            return 'Windows';
        }

        return 'Unknown';
    }
}
