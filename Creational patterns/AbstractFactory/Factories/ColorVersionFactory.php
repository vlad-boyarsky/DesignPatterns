<?php

require_once dirname(__DIR__, 1) . '/Interfaces/ColorConfigFactoryInterface.php';
require_once dirname(__DIR__, 1) . '/Interfaces/DarkModeInterface.php';
require_once dirname(__DIR__, 1) . '/Interfaces/LightModeInterface.php';
require_once dirname(__DIR__, 1) . '/Factories/ViewColorMode/DarkMode.php';
require_once dirname(__DIR__, 1) . '/Factories/ViewColorMode/LightMode.php';


class ColorVersionFactory implements ColorConfigFactoryInterface
{

    public function includeDarkMode(): DarkModeInterface
    {
        return new DarkMode();
    }

    public function includeLightMode(): LightModeInterface
    {
        return new LightMode();
    }
}