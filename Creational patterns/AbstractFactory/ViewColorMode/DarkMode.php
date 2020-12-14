<?php


class DarkMode implements DarkModeInterface
{

    public function build()
    {
        echo "<style>body{background-color: #222222;}</style>";
    }
}