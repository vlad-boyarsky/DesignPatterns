<?php

require_once __DIR__ . '/StyleConfigFactory.php';

$styleConfig = new StyleConfigFactory;
$modeStyle = $styleConfig->getStyleFactory('light');

$modeStyle
    ->includeBorderColorStyle()
    ->build();

$modeStyle
    ->includeBackgroundColorStyle()
    ->build();
