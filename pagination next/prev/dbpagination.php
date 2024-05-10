<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "demo";


// Connect to the database
$conn = new mysqli($server, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




?>