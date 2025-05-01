<?php

namespace Sinergi\BrowserDetector;

class Language
{
    private $language;

    public function __construct($language = null)
    {
        $this->language = $language ?? $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '';
    }

    public function getLanguage(): string
    {
        // Pega apenas o primeiro idioma (ex: "pt-BR,pt;q=0.9,en;q=0.8" => "pt-BR")
        return explode(',', $this->language)[0];
    }
}
