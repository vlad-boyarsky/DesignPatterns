<?php

require_once dirname(__DIR__, 1) . '/Interfaces/DbInterface.php';
require_once dirname(__DIR__, 1) . '/Interfaces/DbCheckInterface.php';
require_once dirname(__DIR__, 1) . '/Interfaces/DbConnectInterface.php';

class ReserveDb implements DbInterface
{

    public function check(): DbCheckInterface
    {
        // TODO: Implement check() method.
    }

    public function connect(): DbConnectInterface
    {
        // TODO: Implement connect() method.
    }
}