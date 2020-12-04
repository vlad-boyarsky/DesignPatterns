<?php

require_once __DIR__ . "/Abstract/AbstractMessage.php";

class EmailMessage extends AbstractMessage
{
    public function send(): string
    {
        echo "Send By " . __METHOD__ . "[" . date("Y-m-d") . "]";
        return parent::send(); 
    }
}