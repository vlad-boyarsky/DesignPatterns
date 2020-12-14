<?php

require_once __DIR__ . '/ColorVersion/ColorVersionFactory.php';
require_once __DIR__ . '/ColorConfigFactory.php';

$colorConfig = new ColorConfigFactory();
$factory = $colorConfig->getColorFactory('dark');

$factory->build();
//$colorModeVersion = new ColorVersionFactory();
//$colorModeVersion->includeLightMode()->build();