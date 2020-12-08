<?php

require_once __DIR__ . '/Core/Shop/ShopEventChannel.php';
require_once __DIR__ . '/Core/Product/ProductPublisher.php';
require_once __DIR__ . '/Core/Subscriber/Subscriber.php';

$shopEventChannel = new ShopEventChannel();

$sandoraJuice = new ProductPublisher('Sandora Juice', $shopEventChannel);
$richJuice = new ProductPublisher('Rich Juice', $shopEventChannel);
$wellDoneJuice = new ProductPublisher('Well Done Juice', $shopEventChannel);

$axelSubscriber = new Subscriber('Axel');
$alexSubscriber = new Subscriber('Alex');
$ronSubscriber = new Subscriber('Ron');

echo $shopEventChannel->subscribe('Sandora Juice', $axelSubscriber) . "<br>";
echo $shopEventChannel->subscribe('Rich Juice', $alexSubscriber) . "<br>";
echo $shopEventChannel->subscribe('Well Done Juice', $ronSubscriber) . "<br>";
echo "<br>";
echo $sandoraJuice->publish('We have new Orange Juice') . "<br>";
echo $richJuice->publish('We have new Apple Juice') . "<br>";
echo $wellDoneJuice->publish('We have new Coconut Juice') . "<br>";