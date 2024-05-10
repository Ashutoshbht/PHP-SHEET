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
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validation for First Name
    if (empty($_POST['firstname'])) {
        $firstnameErr = "Please enter the name";
    } else {
        $firstname = test_input($_POST['firstname']);
        if (!preg_match("/^[a-zA-Z ]*$/", $firstname)) {
            $firstnameErr = "Only letters are allowed";
        }
    }
    if (empty($_POST['lastname'])) {
        $lastnameErr = "Please enter the name";
    } else {
        $firstname = test_input($_POST['firstname']);

    }
}

// Function to sanitize input data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// $firstnameErr = $lastnameErr = $ageErr = $dobErr = $genderErr = $educationErr = $skillsErr = $address1Err = $address2Err = $stateErr = $countryErr = "";
// $firstname = $lastname = $age = $dob = $gender = $education = $skills = $address1 = $address2 = $state = $country = "";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$education = implode(", ", $_POST['education']); // Convert array to comma-separated string
$skills_id = implode(", ", $_POST['skills']); // Convert array to comma-separated string
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
// $state_id = $_POST['state'];
$state_id = implode(", ", $_POST['state']);
// $country_id = $_POST['country'];
$country_id = implode(", ",$_POST['country']) ;

// SQL to insert data into Formtable
$sqlformtable = "INSERT INTO formtable (firstname, lastname, age, dob, gender, education, skills_id, address1, address2, state_id, country_id)
        VALUES ('$firstname', '$lastname', '$age', '$dob', '$gender', '$education', '$skills_id', '$address1', '$address2', '$state_id', '$country_id')";
$conn->query($sqlformtable);


if ($conn->query($sqlformtable) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sqlformtable . "<br>" . $conn->error;
}


// Close connection
$conn->close();
?>
