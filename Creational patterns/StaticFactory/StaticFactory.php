<?php


class StaticFactory implements DbStaticFactoryInterface
{

    public static function connect(string $selectDB = 'main'): DbInterface
    {
        $db = new DataBase();

         switch($selectDB) {

             case 'main':
                 $db;
                 break;
             case 'reserve':
                 $db;
                 break;
             default:
                 echo "No connection to {$selectDB}...";
        }

        $db
            ->setСonnect()
            ->connect();

         return $db;
    }

}