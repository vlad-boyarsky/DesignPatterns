<?php

require_once dirname(__DIR__, 1) . '/Interfaces/StyleConfigFactoryInterface.php';
require_once dirname(__DIR__, 1) . '/Interfaces/BorderColorInterface.php';
require_once dirname(__DIR__, 1) . '/Interfaces/BackgroundColorInterface.php';
require_once dirname(__DIR__, 1) . '/ViewMode/Dark/DarkBorderColorMode.php';
require_once dirname(__DIR__, 1) . '/ViewMode/Dark/DarkBackgroundColorMode.php';


class DarkVersionFactory implements StyleConfigFactoryInterface
{

    public function includeBorderColorStyle(): BorderColorInterface
    {
        return new DarkBorderColorMode();
    }

    public function includeBackroundColorStyle(): BackgroundColorInterface
    {
        return new DarkBackgroundColorMode();
    }
}