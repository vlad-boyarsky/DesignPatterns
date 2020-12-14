<?php


class LightMode implements LightModeInterface
{

    public function build()
    {
        echo "<style>body{background-color: #f3f3f3;}</style>";
    }
}