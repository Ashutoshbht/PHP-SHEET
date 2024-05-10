<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project9"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch 20 records from the main table
$sql = "SELECT * FROM main LIMIT 20";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row in a table format
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Age</th><th>Date of Birth</th><th>Gender</th><th>Education</th><th>Address 1</th><th>Address 2</th><th>State</th><th>Country</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['firstname'] . "</td>";
        echo "<td>" . $row['lastname'] . "</td>";
        echo "<td>" . $row['age'] . "</td>";
        echo "<td>" . $row['dob'] . "</td>";
        echo "<td>" . $row['gender'] . "</td>";
        echo "<td>" . $row['education'] . "</td>";
        echo "<td>" . $row['address1'] . "</td>";
        echo "<td>" . $row['address2'] . "</td>";
        // Fetch state name
        $state_id = $row['state_id'];
        $sql_state = "SELECT state_name FROM state WHERE id = '$state_id'";
        $result_state = $conn->query($sql_state);
        $state_name = ($result_state->num_rows > 0) ? $result_state->fetch_assoc()['state_name'] : '';
        echo "<td>" . $state_name . "</td>";
        // Fetch country name
        $country_id = $row['country_id'];
        $sql_country = "SELECT country_name FROM country WHERE id = '$country_id'";
        $result_country = $conn->query($sql_country);
        $country_name = ($result_country->num_rows > 0) ? $result_country->fetch_assoc()['country_name'] : '';
        echo "<td>" . $country_name . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>
