<?php


class ColorConfigFactory
{
    protected ColorModeFactoryInterface $factory;

    public function getColorFactory($color): ColorModeFactoryInterface
    {
        if ($color === 'light') {
            $this->factory[] = new ColorVersionFactory();
        } elseif ($color === 'dark') {
            $this->factory[] = new DarkVerisonFactory();
        } else {
            throw new Exception('Not correct mode color...');
        }

        return $this->factory;
    }
}