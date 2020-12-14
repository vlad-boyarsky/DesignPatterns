<?php


class BorderColorMode implements BorderColorInterface
{

    public function build()
    {
        echo "<style>body{border: 2px solid black;}</style>";
    }
}