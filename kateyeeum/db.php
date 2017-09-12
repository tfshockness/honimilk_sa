<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpwd = "root";
$dbname = "katePortfolio";
$dbconnection = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);

if(mysqli_connect_errno()){
    die("database connection failed");
}