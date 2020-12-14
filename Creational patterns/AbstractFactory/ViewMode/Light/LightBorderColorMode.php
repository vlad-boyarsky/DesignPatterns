<?php


class LightBorderColorMode implements BorderColorInterface
{

    public function build()
    {
        echo "<style>body{border: 2px solid black;}</style>";
    }
}