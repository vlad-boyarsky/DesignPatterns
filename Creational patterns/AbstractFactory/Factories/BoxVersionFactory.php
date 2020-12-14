<?php

require_once dirname(__DIR__, 1) . '/Interfaces/StyleConfigFactoryInterface.php';
require_once dirname(__DIR__, 1) . '/Interfaces/BorderColorInterface.php';
require_once dirname(__DIR__, 1) . '/Interfaces/BackgroundColorInterface.php';
require_once dirname(__DIR__, 1) . '/Factories/ViewMode/BorderColorMode.php';
require_once dirname(__DIR__, 1) . '/Factories/ViewMode/BackgroundBackgroundColor.php';



class BoxVersionFactory implements StyleConfigFactoryInterface
{

    public function includeBoxStyle(): BorderColorInterface
    {
        // TODO: Implement includeBoxMode() method.
    }

    public function includeColorStyle(): BackgroundColorInterface
    {
        // TODO: Implement includeColorMode() method.
    }

}