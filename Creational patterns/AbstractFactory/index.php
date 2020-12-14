<?php

require_once __DIR__ . '/StyleConfigFactory.php';

$colorConfig = (new StyleConfigFactory())->getStyleFactory('light');
$colorConfig->includeBorderColorStyle()->build();
$colorConfig->includeBackroundColorStyle()->build();



//$colorModeVersion = new LightVersionFactory();
//$colorModeVersion->includeLightMode()->build();