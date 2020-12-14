<?php


interface ColorConfigFactoryInterface
{
    public function includeDarkMode(): DarkModeInterface;

    public function includeLightMode(): LightModeInterface;
}