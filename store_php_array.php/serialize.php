<?php

$data = array(
    "name"=> "john",
    "age" => 30,
    "city"=> "Dolton" 
);

$new_data = serialize($data);
echo $new_data;
?>