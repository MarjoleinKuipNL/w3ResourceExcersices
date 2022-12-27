<?php
// 18: Write a php program to check the largest number among three given integers
function largestNumber($x, $y, $z){
    $max = max($x, max($y, $z));
    return $max;
}

echo largestNumber(1,2,3)."\n";
echo largestNumber(1,3,2)."\n";
echo largestNumber(1,1,1)."\n";
echo largestNumber(1,2,2)."\n";