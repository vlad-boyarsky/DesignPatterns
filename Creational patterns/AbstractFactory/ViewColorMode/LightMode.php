<?php


class LightMode implements LightModeInterface
{

    public function build()
    {
        echo "<style>body{background-color: #eeece9;}</style>";
    }
}