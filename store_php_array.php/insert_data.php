<?php

// Assuming you have a database connection established
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demodata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data =array();

// Serialize the array data
$serialized_data = serialize($data);

// SQL query to insert serialized data into database
$sql = "INSERT INTO demo (s_name) VALUES ('$serialized_data')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Close database connection
$conn->close();
?>
