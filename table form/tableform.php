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
        <th>Last name</th>
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
    $query="select * from formtable";
    $conn =mysqli_connect("localhost","root","","demo");
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result)){ 
        //Display skills names in table
        $skillquery = "select skills_name from skills where skills_id=". $row['skills_id'];
        $skill =mysqli_query($conn,$skillquery);
        $ski=mysqli_fetch_array($skill);
        // Display state name is table
        $statequery = "select state_name from state where state_id=".$row['state_id'];
        $state = mysqli_query($conn,$statequery);
        $st = mysqli_fetch_array($state);
        // Display country name in table
        $countryquery = "select country_name from country where country_id=".$row['country_id'];
        $country = mysqli_query($conn,$countryquery);
        $cont = mysqli_fetch_array($country);
        
        echo"<tr>";
        echo"<th>".$row['main_id']."</th>";
        echo"<th>".$row['firstname']."</th>   ";
        echo"<th>".$row['lastname']."</th>";
        echo"<th>".$row['age']."</th>";
        echo"<th>".$row['dob']."</th>";
        echo"<th>".$row['gender']."</th>";
        echo"<th>".$row['education']."</th>";
        echo"<th>".$ski['skills_name']."</th>";
        echo"<th>".$row['address1']."</th>";
        echo"<th>".$row['address2']."</th>";
        echo"<th>".$st['state_name']."</th>";
        echo"<th>".$cont['country_name']."</th>";

        echo"</tr>";
    }
   
    
    ?>

    </tr>
</table>

</body>
</html>
