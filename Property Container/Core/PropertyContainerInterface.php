<?php

interface PropertyContainerInterface
{
    public function add($propertyName, $value): void;

    public function delete($propertyName): void;

    public function get($propertyName): string|int;

    public function set($propertyName, $value): void;
}