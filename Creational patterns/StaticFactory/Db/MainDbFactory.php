<?php

require_once dirname(__DIR__, 1) . '/Interfaces/DataBaseInterface.php';

class MainDbFactory implements DataBaseInterface
{

    protected array $setConnect = [];

    public function setConnect(): array
    {

        $this->setConnect = ['168.0.0.1', '3306', 'localhost'];

        return $this->setConnect;
    }

    public function connect(): void
    {
        if (!empty($this->setConnect)) {
            echo 'Connected 200 ' . __METHOD__;
        }
    }
}