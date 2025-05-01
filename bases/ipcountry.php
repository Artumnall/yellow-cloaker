<?php

namespace Sinergi\BrowserDetector;

class IpCountry
{
    public static function getCountryByIp(string $ip): string
    {
        // API gratuita (ip-api.com) para obter país pelo IP
        $response = @file_get_contents("http://ip-api.com/json/{$ip}?fields=countryCode");

        if ($response !== false) {
            $data = json_decode($response, true);
            return $data['countryCode'] ?? 'UNKNOWN';
        }

        return 'UNKNOWN';
    }
}
