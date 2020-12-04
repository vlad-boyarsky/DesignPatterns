<?php

require_once __DIR__ . '/Interface/ShopEventChannelInterface.php';

class ShopEventChannel implements ShopEventChannelInterface
{
    private array $products = [];

    public function publish($product, $data)
    {
        if (empty($this->products[$product])) {
            return "Product not found";
        }

        foreach ($this->products[$product] as $subscriberProduct) {
            $subscriberProduct->notify($data);
        }
    }

    public function subscribe($product, SubscriberInterface $subscriber)
    {
        $this->products[$product][] = $subscriber;

        $info = $subscriber->getName() . "subscribe on" . $product . "[" . date('Y-m-d H:i:s') . "]";

        echo $info;
    }
}