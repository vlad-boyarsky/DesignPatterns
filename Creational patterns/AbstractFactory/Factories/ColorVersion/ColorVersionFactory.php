<?php

require_once dirname(__DIR__, 1) . '/Interfaces/ColorModeFactoryInterface.php';
require_once dirname(__DIR__, 1) . '/Interfaces/DarkModeInterface.php';
require_once dirname(__DIR__, 1) . '/Interfaces/LightModeInterface.php';
require_once dirname(__DIR__, 1) . '/ViewColorMode/DarkMode.php';
require_once dirname(__DIR__, 1) . '/ViewColorMode/LightMode.php';


class ColorVersionFactory implements ColorModeFactoryInterface
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