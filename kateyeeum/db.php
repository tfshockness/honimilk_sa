<?php

$dbhost = "localhost";
$dbuser = "yeeumm";
$dbpwd = "7hALvNASYrzzpS8G";
$dbname = "portfolioProject";
$dbconnection = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);

if(mysqli_connect_errno()){
    die("database connection failed");
}