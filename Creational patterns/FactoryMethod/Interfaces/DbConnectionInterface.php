<?php


interface DbConnectionInterface
{
    public function check(): DbCheckInterface;

    public function connect(): DbConnectInterface;
}