<?php


class StaticFactory implements DbStaticFactoryInterface
{

    public static function connect(string $selectDB = 'main'): DataBaseInterface
    {

         switch($selectDB) {

             case 'main':
                 $db = new MainDbFactory();
                 break;
             case 'reserve':
                 $db = new ReserveDbFactory();
                 break;
             default:
                 echo "No connection to {$selectDB}...";
        }

         return $db;
    }

}