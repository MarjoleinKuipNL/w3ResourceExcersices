<?php
//PHP String: Exercises: Remove comma(s) from the specified numeric string
// Write a PHP script to remove comma(s) from the following numeric string.
// Sample String: '2,543.12';
$str1 = "2,543.12";
$x = str_replace(',', '', $str1);
if(is_numeric($x)){
    echo $x."<br>";
}
?>