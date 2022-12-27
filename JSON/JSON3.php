<?php
// 3. Write a PHP script to get JSON representation of a value from an array. Go to the editor
$array = array(
    "uglify-js" => "1.3.4",
    "jshint" => "0.9.1",
    "recess" => "1.1.8",
    "connect" => "2.1.3",
    "hogan.js" => "2.0.0"
);
$myArray = array("Green", "Red", "Blue");
var_dump(json_encode($array));
echo "<br>";
var_dump(json_encode($myArray));
?>