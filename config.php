<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "factory_db";

$con =mysqli_connect($servername,$username,$password,$database);

if(!$con)
    die("Oops! Database is not connected".mysqli_error());

?>