<?php
//Database and Host
$servername = "localhost";
$username = "root";
$password = null;
$dbname = "agrodextrous";

// Create connection
$conn = new mysqli ($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("connection failed: " .$conn->$connect_error);
}
?>