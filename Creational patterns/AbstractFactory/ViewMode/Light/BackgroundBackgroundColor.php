<?php


class BackgroundBackgroundColor implements BackgroundColorInterface
{

    public function build()
    {
        echo "<style>body{background-color: #1f1f1f;}</style>";
    }
}