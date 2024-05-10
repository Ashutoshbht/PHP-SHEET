<?php

$json_string = '{"name": "Ashutosh Bhatt", "Company": "CodeDrills Infotech","Role": "Php developer","age":27}';

$data = json_decode($json_string,true);
print_r($data);

?>