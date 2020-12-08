<?php

require_once 'PropertyContainerInterface.php';

class PropertyContainer implements PropertyContainerInterface
{

    private array $propertyContainer = [];

    public function add($propertyName, $value): void
    {
        $this->propertyContainer[$propertyName] = $value;
    }

    public function delete($propertyName): void
    {
        unset($this->propertyContainer[$propertyName]);
    }

    public function get($propertyName): string|int
    {
        return $this->propertyContainer[$propertyName] ?? 'Nan';
    }

    public function set($propertyName, $value): void
    {
        if (!isset($this->propertyContainer[$propertyName])) {
            throw new Exception("No ! " . $propertyName . " ! property");
        }

        $this->propertyContainer[$propertyName] = $value;
    }
}