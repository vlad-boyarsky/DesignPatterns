<?php

require_once __DIR__ . '/StyleConfigFactory.php';

$colorConfig = new StyleConfigFactory();
$factory = $colorConfig->getColorFactory('dark');

$factory->build();
//$colorModeVersion = new ColorVersionFactory();
//$colorModeVersion->includeLightMode()->build();