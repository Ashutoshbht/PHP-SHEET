<?php
// Assuming URL is http://example.com/path?param1=value1&param2=value2

// Check if parameters exist
if (isset($_GET['param1']) && isset($_GET['param2'])) {
    // Retrieve parameter values
    $param1_value = $_GET['param1'];
    $param2_value = $_GET['param2'];

    // Output parameter values
    echo "Parameter 1 value: " . $param1_value . "<br>";
    echo "Parameter 2 value: " . $param2_value . "<br>";
} else {
    // Handle case where parameters are missing
    echo "Parameters are missing in the URL.";
}
?>
