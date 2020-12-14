<?php

require_once __DIR__ . '/Factories/ColorVersion/ColorVersionFactory.php';

$colorModeVersion = new ColorVersionFactory();
$colorModeVersion->includeLightMode()->build();