<?php

require_once dirname(__DIR__, 1) . '/FactoryMethod/DbFactories/MainDbFactory.php';
require_once dirname(__DIR__, 1) . '/FactoryMethod/DbFactories/ReserveDbFactory.php';

$selectConnection = fn(AbstractDbFactory $db): string => $db->build();

echo "<pre>{$selectConnection(new MainDbFactory())}{$selectConnection(new ReserveDbFactory())}</pre>";