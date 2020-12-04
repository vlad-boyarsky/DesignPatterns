<?php

require "Core/Messages/CoreMessage.php";

$coreMessage = new CoreMessage();

echo "<pre>";
$coreMessage->setMessage('Hello Everyone')->send();
var_dump($coreMessage);

$coreMessage->sendByEmail()->setMessage('Hello From Email')->send();
var_dump($coreMessage);
echo "</pre>";