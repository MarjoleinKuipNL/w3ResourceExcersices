<?php
// php excercises: Check if a given positive number is a multiple of 3 or a multiple of7
function multipleOf3Or7($number){
    return $number % 3 == 0 || $number % 7 == 0;
}

var_dump(multipleOf3Or7(3));
var_dump(multipleOf3Or7(14));
var_dump(multipleOf3Or7(12));
var_dump(multipleOf3Or7(37));