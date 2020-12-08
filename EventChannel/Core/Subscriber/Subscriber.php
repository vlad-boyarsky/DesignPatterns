<?php

require_once __DIR__ . '/Interface/SubscriberInterface.php';

class Subscriber implements SubscriberInterface
{

    private string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function notify($data): void
    {
        $message = $this->getName() . " notified about " . $data;

        echo $message;
    }

    public function getName(): string
    {
        return $this->name;
    }

}