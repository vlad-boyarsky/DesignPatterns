<?php

require_once __DIR__ . "/AbstractMessage.php";

abstract class AbstractMessage implements MessageInterface
{

    protected string $message;

    public function setMessage($message): MessageInterface
    {
        $this->message = $message;

        return $this;
    }

    public function send(): mixed
    {
        return 'Success send 200|OK';
    }

    public function error(): mixed
    {
        throw new Exception('Sorry not correct Data...');
    }
}