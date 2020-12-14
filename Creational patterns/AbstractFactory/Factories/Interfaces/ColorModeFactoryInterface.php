<?php


interface ColorModeFactoryInterface
{
    public function includeDarkMode(): DarkModeInterface;

    public function includeLightMode(): LightModeInterface;
}