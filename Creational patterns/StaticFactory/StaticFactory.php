<?php

require_once 'Interfaces/DataBaseInterface.php';
require_once 'Db/MainDbFactory.php';
require_once 'Db/ReserveDbFactory.php';

class StaticFactory
{

    public static function connect(string $selectDB = 'main'): DataBaseInterface
    {

        switch ($selectDB) {

            case 'main':
                $db = new MainDbFactory();
                $db->setConnect();
                $db->connect();
                break;
            case 'reserve':
                $db = new ReserveDbFactory();
                $db->setConnect();
                $db->connect();
                break;
            default:
                echo "No connection to {$selectDB}...";
        }

        return $db;
    }

}