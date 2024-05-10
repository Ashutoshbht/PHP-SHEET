<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // echo "firstname is stored in session is:".$_SESSION['firstname'].".<br>";
    // echo "firstname is stored in session is:".$_SESSION['lastname'].".";
    print_r($_SESSION);
    
    
    ?>
</body>
</html>