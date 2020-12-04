<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/PHP-Patterns/Delegation/Core/Messages/MessagesType/Abstract/AbstractMessage.php";

abstract class AbstractMessage implements MessageInterface
{

    protected string $message;

    public function setMessage($message): MessageInterface
    {
        $this->message = $message;

        return $this;
    }

    public function send(): string
    {
        if (!empty($this->setMessage($this->message))) {
            return "Success no errors";
        }

        return $this->error();
    }

    public function error(): Exception
    {
        throw new Exception("Message not found!");
    }
}