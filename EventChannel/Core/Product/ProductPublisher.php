<?php

require_once __DIR__ . '/Interface/ProductPublisherInterface.php';

class ProductPublisher implements ProductPublisherInterface
{

    private string $product;

    private ShopEventChannelInterface $eventChannel;

    public function __construct(string $product, ShopEventChannelInterface $shopEventChannel)
    {
        $this->product = $product;

        $this->eventChannel = $shopEventChannel;
    }

    public function publish(string $data): void
    {
        $this->eventChannel->publish($this->product, $data);
    }
}