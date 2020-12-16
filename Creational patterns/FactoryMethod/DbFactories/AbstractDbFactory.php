<?php

require_once dirname(__DIR__, 1) . '/Interfaces/DbInterface.php';

abstract class AbstractDbFactory
{

    abstract protected function getDb(): DbInterface;

    public function build()
    {
        $db = $this->getDb();
        $checkConnection = $db->check();
        $connect = $db->connect();

        return $checkConnection . ' ' . $connect;
    }
}