<?php

class UserProperties
{

    protected PropertyContainerInterface $userPropertyContainer;

    public function __construct(PropertyContainerInterface $propertyContainer)
    {
        $this->userPropertyContainer = $propertyContainer;
    }

    public function add($propertyName, $value): void
    {
        $this->userPropertyContainer->add($propertyName, $value);
    }

    public function delete($propertyName): void
    {
        $this->userPropertyContainer->delete($propertyName);
    }

    public function get($propertyName): string|int
    {
        return $this->userPropertyContainer->get($propertyName);
    }

    public function set($propertyName, $value): void
    {
        $this->userPropertyContainer->set($propertyName, $value);
    }

}