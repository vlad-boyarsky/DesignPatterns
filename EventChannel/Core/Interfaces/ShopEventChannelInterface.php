<?php


interface ShopEventChannelInterface
{
    public function publish($product, $data);

    public function subscribe($product, SubscriberInterface $subscriber);
}