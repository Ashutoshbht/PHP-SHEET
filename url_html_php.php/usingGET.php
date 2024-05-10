<!DOCTYPE html>
<html>
<head>
    <title>Passing Query Strings - Using $_GET</title>
</head>
<body>
    <?php
    // Set parameters
    $param1 = "value1";
    $param2 = "value2";

    // Construct URL using $_GET
    $url = "target.php?param1=" . urlencode($param1) . "&param2=" . urlencode($param2);
    ?>

    <p><a href="<?php echo $url; ?>">Link using $_GET</a></p>
</body>
</html>
