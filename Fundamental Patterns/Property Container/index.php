<?php

require_once 'Core/Profiles/UserProperties.php';
require_once 'Core/PropertyContainer.php';

$propertyContainer = new PropertyContainer();
$userProperties = new UserProperties($propertyContainer);

$userProperties->add("Name", "Alex");
$userProperties->set("Name", "Alex");

echo $userProperties->get("Name");