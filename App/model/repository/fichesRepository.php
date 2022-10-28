<?php

function listerToutesLesFiches($connection)
{
    $sql =  "SELECT * FROM carnet";
    $query = mysqli_query($connection, $sql);

    return mysqli_fetch_all($query, MYSQLI_ASSOC);
}