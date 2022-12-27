<?php
// 4. Write a PHP script to convert scientific notation to an int and a float.
// Sample Scientific notation: 4.5e3
// expected ouput 4 and 4500
$value = '4.5e3';
$intValue = (int) $value;
$floatValue = (float) $value;

echo  $intValue . "<br>";
echo $floatValue . "<br>"; 