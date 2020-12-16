<?php

function selectConnection(DbInterface $db)
{
    $db->check();
    $db->connect();
}

selectConnection(new MainDb());
selectConnection(new ReserveDb());
