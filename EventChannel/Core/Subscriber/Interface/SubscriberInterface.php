<?php


interface SubscriberInterface
{
    public function notify($data);

    public function getName();
}