<!DOCTYPE html>
<html>
<head>
    <title>Passing Query Strings - Using http_build_query()</title>
</head>
<body>
    <?php
    // Set parameters
    $params = array(
        'param1' => 'value1',
        'param2' => 'value2'
    );

    // Construct URL using http_build_query()
    $url = 'target.php?' . http_build_query($params);
    ?>

    <p><a href="<?php echo $url; ?>">Link using http_build_query()</a></p>
</body>
</html>
