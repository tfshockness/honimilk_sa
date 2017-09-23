<?php

$dbhost = "localhost";
$dbuser = "kateyeeu_yiyeum";
$dbpwd = "Yem@518794";
$dbname = "kateyeeu_katePortfolio";
$dbconnection = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);

if(mysqli_connect_errno()){
    die("database connection failed");
}