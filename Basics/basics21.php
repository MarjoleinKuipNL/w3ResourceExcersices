<?php
// 21. Write a PHP function to test whether a number is greater than 30, 20 or 10 using ternary operator. 
function greaterThan($number){
    $test  = $number > 30 
    ? 'greater than 30' 
    : ($number > 20  ? 
    'greater than 20': ($number > 10 ?
     'number greater than 10' : '
    number not greater than 10'));
    echo $number . " : ". $test."\n";
}

greaterThan(32);
greaterThan(22);
greaterThan(12);
greaterThan(2);
?>