<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "project9";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$errors = []; // Array to store validation errors

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form data
    if (empty($_POST["firstname"])) {
        $errors['firstname'] = "First Name is required";
    }
    

    // If no errors, insert data into database
    if (empty($errors)) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $age = $_POST['age'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $education = $_POST['education'];
        $skills_id = $_POST['skills_id'];
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];
        $state_id = $_POST['state_id'];
        $country_id = $_POST['country'];
        $state_id = $_POST['state']; 
        $skills = isset($_POST['skills']) ? $_POST['skills'] : []; 

        // Insert data into main table
        $sql_main = "INSERT INTO main (firstname, lastname, age, dob, gender, education, skills_id address1, address2, state_id, country_id) 
                     VALUES ('$firstname', '$lastname', '$age', '$dob', '$gender', '$education', '$skills_id' '$address1', '$address2', '$state_id' '$country_id')";

        if ($conn->query($sql_main) === TRUE) {
            // Get the ID of the last inserted row
            $main_id = $conn->insert_id;

            // Insert data into skills table
            if (!empty($skills)) {
                foreach ($skills as $skill) {
                    $sql_skills = "INSERT INTO skills (main_id, skills_name) VALUES ('$main_id', '$skill')";
                    $conn->query($sql_skills);
                }
            }

            // Insert data into country table
            $country_name = $_POST['country_name'];
            $sql_country = "INSERT INTO country (country_name, main_id) VALUES ('$country_name', '$main_id')";
            $conn->query($sql_country);

            // Insert data into states table
            $state_name = $_POST['state_name'];
            $sql_state = "INSERT INTO states (state_name) VALUES ('$state_name')";
            $conn->query($sql_state);

            echo "New record created successfully";
        } else {
            echo "Error: " . $sql_main . "<br>" . $conn->error;
        }
    }
}
?>
