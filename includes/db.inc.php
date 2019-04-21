<?php

$serverName ="localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "smac";

$conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName );

if(!$conn){
    die("connection_failed:".mysqli_connect_error());
}