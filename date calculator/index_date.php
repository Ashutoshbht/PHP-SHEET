<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Date Difference Calculator</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
    <h2>Date Difference Calculator</h2>

<form action="index_date.php" method="post">
    <label for="first_date">Choose Date 1:</label>
    <input type="date" id="first_date" name="first_date" value="" required><br><br>
    <label for="second_date">Choose Date 2:</label>
    <input type="date" id="second_date" name="second_date" value="" required><br><br>
    <input type="submit" value="Calculate Difference" name="submit">
</form>


    <?php
if(isset($_POST['submit'])){
    if(!empty($_POST['first_date']) && !empty($_POST['second_date'])){
        $first_date = $_POST['first_date'];
        $second_date = $_POST['second_date'];
        
        $date1 = new DateTime($first_date);
        $date2 = new DateTime($second_date);
        
        $interval = date_diff($date1, $date2);
        
        $years = $interval->y;
        $months = $interval->m;
        $days = $interval->d;
        
        echo "<br><div id='difference'><label>Date Difference:</label><input type='text' value='$years years, $months months, $days days' readonly></div>";
    } else {
        echo "<br><p>Please enter both dates.</p>";
    }
}
?>

</div>

</body>
</html>
