<?php


interface StyleConfigFactoryInterface
{
    public function includeBorderColorStyle(): BorderColorInterface;

    public function includeBackroundColorStyle(): BackgroundColorInterface;
}