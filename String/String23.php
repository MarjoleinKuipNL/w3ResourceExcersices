<?php
// PHP String exercises: Replace multiple characters from a string with
// Write a PHP script to replace mulitple characters from the followint string.
// Sample string: '\"\1+2/3*3:2-3/4*3"';
$my_string = '\"\1+2/3*3:2-3/4*3';
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_string)."<br>";
?>