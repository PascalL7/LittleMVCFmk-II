<?php
$hostname="127.0.0.1";
$username="root";
$password="";
$dbname="annuaire";
$usertable="carnet";
$port = 3306;
$socket = null;

$mysqli = mysqli_connect($hostname, $username, $password, $dbname, $port, $socket);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
mysqli_select_db($mysqli, $dbname);
session_start();
$connection = mysqli_connect($hostname,$username,$password,$dbname);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}


/*
// Free result set
mysqli_free_result($result);

mysqli_close($connection);
*/