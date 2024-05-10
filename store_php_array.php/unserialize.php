<?php
// Serialized string
$serialized_string = 'a:3:{s:4:"name";s:4:"John";s:3:"age";i:30;s:4:"city";s:8:"New York";}';

$new_data = unserialize($serialized_string);
print_r($new_data);

?>