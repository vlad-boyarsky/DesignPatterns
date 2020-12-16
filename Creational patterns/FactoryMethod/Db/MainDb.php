<?php

require_once dirname(__DIR__, 1) . '/Interfaces/DbInterface.php';
require_once dirname(__DIR__, 1) . '/Interfaces/DbCheckInterface.php';
require_once dirname(__DIR__, 1) . '/Interfaces/DbConnectInterface.php';

class MainDb implements DbInterface
{

    public function check(): DbCheckInterface
    {
        echo __METHOD__ . " check new DB";
    }

    public function connect(): DbConnectInterface
    {
        echo __METHOD__ . " DB connected";
    }
}