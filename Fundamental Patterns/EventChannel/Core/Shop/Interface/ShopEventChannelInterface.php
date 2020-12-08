<?php

interface ShopEventChannelInterface
{
    public function publish(string $product, string $data);

    public function subscribe(string $product, SubscriberInterface $subscriber);
}