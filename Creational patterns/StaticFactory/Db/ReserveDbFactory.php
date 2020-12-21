<?php

require_once dirname(__DIR__, 1) . '/Interfaces/DataBaseInterface.php';

class ReserveDbFactory implements DataBaseInterface
{

    protected array $setConnect = [];

    public function setConnect(): array
    {

        $this->setConnect = ['127.0.0.1', '3306', 'localhost'];

        return $this->setConnect;
    }

    public function connect(): void
    {
        if (!empty($this->setConnect)) {
            echo 'Connected 200 ' . __METHOD__;
        }
    }

}