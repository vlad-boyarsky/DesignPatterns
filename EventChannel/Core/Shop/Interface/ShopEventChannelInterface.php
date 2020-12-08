<?php


interface ShopEventChannelInterface
{
    public function publish(string $product, $data);

    public function subscribe($product, SubscriberInterface $subscriber);
}