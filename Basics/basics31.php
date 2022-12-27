<?php
// 31 Write a PHP program to swap two variables.
// my solution
$a = 20;
$b = 30;
$temp = $a;
$a = $b;
$b = $temp;
echo $a;

// w3resource  Code : Swap two numbers using a third variable
$a1 = 15;
$b1 = 27;

// swap Logic
echo "\n The number before swapping is \n";
echo "Number a =".$a1." and b=".$b1;

$temp1 = $a1;
$a1 = $b1;
$b1= $temp;

echo "\n The number after swapping is: \n";
echo "Number a = ".$a1 . " and b=".$b."\n";

$a2 = 15;
$b2 = 276;

echo "\nBefore swapping: " . $a2 . ',' . $b2;
list($a2, $b2) = array($b2, $a2);
echo "\n after swapping: " . $a . ',' . $b . "\n";