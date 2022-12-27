<?php
// 17. PHP String exercises: Insert a string at the specified position in a given string
// original String: 'The brown fox';
// insert 'quick' between 'The' and 'brown';
$original_string = "The brown fox";
$string_to_insert = "quick";
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string."<br>";
?>