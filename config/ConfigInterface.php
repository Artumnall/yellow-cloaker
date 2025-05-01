<?php

namespace Config;

interface ConfigInterface
{
    public function getSafePage(): string;
    public function getMoneyPage(): string;
    public function getFilter(): array;
}
