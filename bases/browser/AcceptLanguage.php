<?php

namespace Sinergi\BrowserDetector;

class AcceptLanguage
{
    private $acceptLanguage;

    public function __construct($acceptLanguage = null)
    {
        $this->acceptLanguage = $acceptLanguage ?? $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '';
    }

    public function getAcceptLanguage(): string
    {
        return $this->acceptLanguage;
    }
}
