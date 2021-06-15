<?php

class DarkBorderColorMode implements BorderColorInterface
{

    public function build()
    {
        echo "<style>body{border: 2px solid #efefef;}</style>";
    }
}