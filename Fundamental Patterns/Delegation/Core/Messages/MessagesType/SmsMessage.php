<?php

require_once __DIR__ . "/Abstract/AbstractMessage.php";

class SmsMessage extends AbstractMessage
{

    public function send(): mixed
    {

        if ($this->message != '') {
            echo "Send By " . __METHOD__ . "[" . date("Y-m-d") . "]";

            return parent::send();
        }

        return parent::error();

    }
}