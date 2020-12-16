<?php

require_once dirname(__DIR__, 1) . '/DbFactories/AbstractDbFactory.php';
require_once dirname(__DIR__, 1) . '/Db/MainDb.php';


class MainDbFactory extends AbstractDbFactory
{

    protected function getDb(): DbInterface
    {
        return new MainDb();
    }

}