<?php

require_once dirname(__DIR__, 1) . '/Interfaces/DbConnectionInterface.php';

abstract class AbstractDbFactory
{

    abstract function getDbConnection(): DbConnectionInterface;

    public function build()
    {
        $dbConnection = $this->getDbConnection();
        $checkConnection = $dbConnection->check()->run();
        $connect = $dbConnection->connect()->run();

        return $checkConnection . ' ' . $connect;
    }
}