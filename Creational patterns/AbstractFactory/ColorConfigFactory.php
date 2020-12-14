<?php

require_once dirname(__DIR__, 1) . '/AbstractFactory/Factories/ViewColorMode/LightMode.php';
require_once dirname(__DIR__, 1) . '/AbstractFactory/Factories/ViewColorMode/DarkMode.php';

class ColorConfigFactory
{
    protected ColorConfigFactoryInterface $factory;

    public function getColorFactory($color): ColorConfigFactoryInterface
    {
        if ($color === 'light') {
            $factory = (new ColorVersionFactory());
        } elseif ($color === 'dark') {
            $factory = new DarkMode();
        } else {
            throw new Exception('Not correct mode color...');
        }

        return $factory;
    }
}