<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Display</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<table>
    <tr>
        <th>Main_id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>DOB</th>
        <th>Gender</th>
        <th>Education</th>
        <th>Skills</th>
        <th>Address 1</th>
        <th>Address 2</th>
        <th>State</th>
        <th>Country</th>
    </tr>
    <?php
    // Pagination setup
    $limit = 5; // Number of records per page
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $start = ($page - 1) * $limit;

    $query = "SELECT * FROM formtable LIMIT $start, $limit ";
    $conn = mysqli_connect("localhost", "root", "", "demo");
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        // Display skills names in table
        $skillquery = "SELECT skills_name FROM skills WHERE skills_id=" . $row['skills_id'];
        $skill = mysqli_query($conn, $skillquery);
        $ski = mysqli_fetch_array($skill);
        // Display state name is table
        $statequery = "SELECT state_name FROM state WHERE state_id=" . $row['state_id'];
        $state = mysqli_query($conn, $statequery);
        $st = mysqli_fetch_array($state);
        // Display country name in table
        $countryquery = "SELECT country_name FROM country WHERE country_id=" . $row['country_id'];
        $country = mysqli_query($conn, $countryquery);
        $cont = mysqli_fetch_array($country);
        
        echo "<tr>";
        echo "<th>".$row['main_id']."</th>";
        echo "<th>".$row['firstname']."</th>";
        echo "<th>".$row['lastname']."</th>";
        echo "<th>".$row['age']."</th>";
        echo "<th>".$row['dob']."</th>";
        echo "<th>".$row['gender']."</th>";
        echo "<th>".$row['education']."</th>";
        echo "<th>".$ski['skills_name']."</th>";
        echo "<th>".$row['address1']."</th>";
        echo "<th>".$row['address2']."</th>";
        echo "<th>".$st['state_name']."</th>";
        echo "<th>".$cont['country_name']."</th>";
        echo "</tr>";
    }
    ?>
</table>

<!-- Pagination links -->
<?php
$query = "SELECT COUNT(*) AS total FROM formtable";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$totalPages = ceil($row["total"] / $limit);

echo "<br><br><div class='pagination'>";
if ($page > 1) {
    echo "<a href='?page=".($page - 1)."'>Previous</a>";
}

// for ($i = 1; $i <= $totalPages; $i++) {
//     if ($i == $page) {
//         echo "<a class='active' href='?page=$i'>$i</a>";
//     } else {
//         echo "<a href='?page=$i'>$i</a>";
//     }
// }

if ($page < $totalPages) {
    echo "<a href='?page=".($page + 1)."'>Next</a>";
}
echo "</div>";
?>

</body>
</html>
