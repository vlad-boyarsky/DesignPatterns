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

//$shopEventChannel->subscribe($sandoraJuice, $axelSubscriber);
//$shopEventChannel->subscribe($richJuice, $alexSubscriber);
echo $shopEventChannel->subscribe('Orange Juice', $ronSubscriber) . "<br>";

echo $sandoraJuice->publish('We have new Orange Juice') . "<br>";