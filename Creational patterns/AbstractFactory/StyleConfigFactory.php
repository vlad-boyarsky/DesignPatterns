<?php

require_once dirname(__DIR__, 1) . '/AbstractFactory/Factories/ViewMode/BackgroundBackgroundColor.php';
require_once dirname(__DIR__, 1) . '/AbstractFactory/Factories/ViewMode/BorderColorMode.php';

class StyleConfigFactory
{
    protected StyleConfigFactoryInterface $factory;

    public function getColorFactory($color): StyleConfigFactoryInterface
    {
        if ($color === 'light') {
            $factory = (new ColorVersionFactory());
        } elseif ($color === 'dark') {
            $factory = new BorderColorMode();
        } else {
            throw new Exception('Not correct mode color...');
        }

        return $factory;
    }
}