<?php

require "MessagesType/Interfaces/MessageInterface.php";
require "MessagesType/SmsMessage.php";
require "MessagesType/EmailMessage.php";

class CoreMessage implements MessageInterface
{

    private $prepareMessage;

    public function __construct()
    {
        $this->sendBySms();
    }

    public function send(): mixed
    {
        return $this->prepareMessage->send();
    }

    public function setMessage($message): MessageInterface
    {
        $this->prepareMessage->setMessage($message);

        return $this->prepareMessage;
    }

    public function sendByEmail(): CoreMessage
    {
        $this->prepareMessage = new EmailMessage();

        return $this;
    }

    public function sendBySms(): CoreMessage
    {
        $this->prepareMessage = new SmsMessage();

        return $this;
    }
}