<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_phypupil";

$connection = new mysqli($host, $username, $password, $database);
if ($connection->connect_error) {
    die("connection failed" . mysqli_connect_error());
}
?>