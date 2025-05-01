<?php

namespace Sinergi\BrowserDetector;

class Os
{
    private $userAgent;

    public function __construct($userAgent = null)
    {
        $this->userAgent = $userAgent ?? $_SERVER['HTTP_USER_AGENT'] ?? '';
    }

    public function getOs(): string
    {
        $userAgent = $this->userAgent;

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
