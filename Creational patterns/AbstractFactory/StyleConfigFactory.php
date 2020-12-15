<?php

require_once dirname(__DIR__, 1) . '/AbstractFactory/Factories/DarkVersionFactory.php';
require_once dirname(__DIR__, 1) . '/AbstractFactory/Factories/LightVersionFactory.php';

class StyleConfigFactory
{
    protected StyleConfigFactoryInterface $factory;

    public function getStyleFactory($color): StyleConfigFactoryInterface
    {
        if ($color === 'light') {
            $this->factory = new LightVersionFactory();
        } elseif ($color === 'dark') {
            $this->factory = new DarkVersionFactory();
        } else {
            throw new Exception('Not correct mode color...');
        }

        return $this->factory;
    }
}