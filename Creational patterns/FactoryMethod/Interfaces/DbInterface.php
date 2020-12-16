<?php


interface DbInterface
{
    public function check(): string;

    public function connect(): string;
}