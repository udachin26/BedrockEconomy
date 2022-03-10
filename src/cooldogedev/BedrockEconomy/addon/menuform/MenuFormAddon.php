<?php
declare(strict_types=1);

namespace cooldogedev\BedrockEconomy\addon\menuform;

use cooldogedev\BedrockEconomy\addon\Addon;

final class MenuFormAddon extends Addon
{

    protected function onEnable(): void
    {
       
    }

    public function getName(): string
    {
        return "MenuForm";
    }

    public function getVersion(): string
    {
        return "1.0.0";
    }

    public function getMinimumSupportedBedrockEconomyVersion(): string
    {
        return "2.0.7";
    }
}
