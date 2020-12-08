<?php

require_once __DIR__ . '/Interface/ProductPublisherInterface.php';

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