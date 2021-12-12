<?php
$servername="localhost";
$user="root";
$password="";
$dbname="isp";
$connection = new mysqli($servername, $user, $password, $dbname);
//$pass=$username=$flag="";
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}