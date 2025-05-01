<?php

namespace Sinergi\BrowserDetector;

class LanguageDetector
{
    public static function detect(string $language): string
    {
        // Retorna o primeiro idioma (ex: "pt-BR,pt;q=0.9" => "pt-BR")
        return explode(',', $language)[0];
    }
}
