<?php


abstract class AbstractDB
{

    abstract function getDbConfig();

    public function build()
    {
        $dbConfig = $this->getDbConfig();
        $checkConnection = $dbConfig->check()->run();
        $connect = $dbConfig->connect()->run();

        return $checkConnection . ' ' . $connect;
    }
}