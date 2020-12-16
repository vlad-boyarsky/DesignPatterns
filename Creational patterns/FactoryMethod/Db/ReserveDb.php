<?php

require_once dirname(__DIR__, 1) . '/Interfaces/DbInterface.php';

class ReserveDb implements DbInterface
{

    public function check(): string
    {
        return __METHOD__ . " check new DB...\n";
    }

    public function connect(): string
    {
        return __METHOD__ . " DB connected\n\n";
    }
}