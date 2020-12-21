<?php


interface DataBaseInterface
{
    public function setConnect(): array;

    public function connect(): void;
}