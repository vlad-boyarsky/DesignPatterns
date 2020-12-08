<?php


interface SubscriberInterface
{
    public function notify($data): string;

    public function getName(): string;
}