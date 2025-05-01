<?php

namespace Sinergi\BrowserDetector;

class UserAgent
{
    private $userAgent;

    public function __construct($userAgent = null)
    {
        $this->userAgent = $userAgent ?? $_SERVER['HTTP_USER_AGENT'] ?? '';
    }

    public function getUserAgent(): string
    {
        return $this->userAgent;
    }
}
