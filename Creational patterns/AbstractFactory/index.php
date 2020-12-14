<?php

require_once __DIR__ . '/StyleConfigFactory.php';

$styleConfig = new StyleConfigFactory;
$modeStyle = $styleConfig->getStyleFactory('dark');

$modeStyle->includeBorderColorStyle()->build();
$modeStyle->includeBackroundColorStyle()->build();

//$colorConfig->includeBorderColorStyle()->build();
//$colorConfig->includeBackroundColorStyle()->build();



//$colorModeVersion = new LightVersionFactory();
//$colorModeVersion->includeLightMode()->build();