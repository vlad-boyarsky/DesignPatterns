<?php


interface StyleConfigFactoryInterface
{
    public function includeBoxStyle(): BorderColorInterface;

    public function includeColorStyle(): BackgroundColorInterface;
}