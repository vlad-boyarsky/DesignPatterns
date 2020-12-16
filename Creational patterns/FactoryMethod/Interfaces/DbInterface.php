<?php


interface DbInterface
{
    public function check(): DbCheckInterface;

    public function connect(): DbConnectInterface;
}