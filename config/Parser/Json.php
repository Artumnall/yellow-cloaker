<?php

namespace Config\Parser;

class Json implements ParserInterface
{
    public function getData(): array
    {
        $jsonPath = __DIR__ . '/../../../settings.json';

        if (!file_exists($jsonPath)) {
            return [];
        }

        $content = file_get_contents($jsonPath);
        $data = json_decode($content, true);

        return is_array($data) ? $data : [];
    }
}
