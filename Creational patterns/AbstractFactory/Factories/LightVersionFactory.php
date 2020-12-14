<?php

require_once dirname(__DIR__, 1) . '/Interfaces/StyleConfigFactoryInterface.php';
require_once dirname(__DIR__, 1) . '/Interfaces/BorderColorInterface.php';
require_once dirname(__DIR__, 1) . '/Interfaces/BackgroundColorInterface.php';
require_once dirname(__DIR__, 1) . '/ViewMode/Light/LightBorderColorMode.php';
require_once dirname(__DIR__, 1) . '/ViewMode/Light/LightBackgroundColorMode.php';


class LightVersionFactory implements StyleConfigFactoryInterface
{

    public function includeBorderColorStyle(): BorderColorInterface
    {
        return new LightBorderColorMode();
    }

    public function includeBackroundColorStyle(): BackgroundColorInterface
    {
        return new LightBackgroundColorMode();
    }
}