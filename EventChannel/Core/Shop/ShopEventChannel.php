<?php

require_once __DIR__ . '/Interface/ShopEventChannelInterface.php';

class ShopEventChannel implements ShopEventChannelInterface
{
    private array $products = [];

    public function publish(string $product, string $data)
    {
        foreach ($this->products[$product] as $subscriberProduct) {
            $subscriberProduct->notify($data);
        }
    }

    public function subscribe(string $product, SubscriberInterface $subscriber)
    {
        $this->products[$product][] = $subscriber;

        $info = $subscriber->getName() . " subscribe on " . "'" . $product . "'" . " [" . date('Y-m-d H:i:s') . "]";

        echo $info;
    }
}