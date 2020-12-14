<?php


class LightBackgroundColorMode implements BackgroundColorInterface
{

    public function build()
    {
        echo "<style>body{background-color: #d9c5b5;}</style>";
    }
}