<?php

// Variable declaration
$name= val ($_POST["name"]);
$email= val ($_POST["email"]);
$phone= val ($_POST["phone"]);
$message= addslashes ($_POST["message"]);

// Modify data input
function val ($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

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

//SQL Query 
$sql = "INSERT INTO customers (fullname, email, phone, comment) VALUES ('$name', '$email', '$phone', '$message')";

// Output message
if ($conn->query($sql) === TRUE) {
    echo "Thank you for contacting us! <br> We'll get back to you in due time";
}
else {
    echo "Error: " .$sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>