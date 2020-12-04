<?php

require_once __DIR__ . '/Interface/ProductPublisherInterface.php';
require __DIR__ . '../Shop/Interface/ShopEventChannelInterface.php';

class ProductPublisher implements ProductPublisherInterface
{

    private $product;

    private $eventChannel;

    public function __construct($product, ShopEventChannelInterface $shopEventChannel)
    {
        $this->product = $product;

        $this->eventChannel = $shopEventChannel;
    }

    public function publish($data)
    {
        $this->eventChannel->publish($this->product, $data);
    }
}