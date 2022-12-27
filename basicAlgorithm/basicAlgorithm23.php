<?php
// excercise 23: Write a php program to check if two given non-negative integers have the same last digit
function sameLastDigit($x, $y){
    return $x % 10 == $y % 10 ? true: false;
}
var_dump(sameLastDigit(123, 456));
var_dump(sameLastDigit(12, 512));
var_dump(sameLastDigit(7,87));
var_dump(sameLastDigit(12,45));