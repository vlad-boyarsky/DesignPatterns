<?php

require_once dirname(__DIR__, 1) . '/DbFactories/AbstractDbFactory.php';
require_once dirname(__DIR__, 1) . '/Db/ReserveDb.php';


class ReserveDbFactory extends AbstractDbFactory
{
    function getDb(): DbInterface
    {
        return new ReserveDb();
    }
}