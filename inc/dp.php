<?php

$servername = "localhost";
$usename = "root";
$password = "";
$dbname = "crud-php";


// create connection

$conn = mysqli_connect($servername,$usename,$password,$dbname);

if(!$conn)
{
    die("Connection Failed :".mysqli_connect_error());
}

?>