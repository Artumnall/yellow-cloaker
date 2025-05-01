<?php

namespace Config;

abstract class AbstractConfig implements ConfigInterface
{
    public function getSafePage(): string
    {
        return 'https://www.google.com'; // white page
    }

    public function getMoneyPage(): string
    {
        return 'https://metodosuarenda.systeme.io/metodo'; // página de vendas
    }

    public function getFilter(): array
    {
        return [
            'bots' => true,
            'countries' => [],
            'languages' => [],
            'ips' => [],
            'userAgents' => [],
            'referers' => [],
            'hostnames' => [],
            'timezones' => [],
        ];
    }
}
