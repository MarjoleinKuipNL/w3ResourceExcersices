<?php
// 4. Write a PHP program to check a given 
//integer and return true if it is within 
//10 of 100 or 200. 

// abs is the absolute value: abs
// returns the absolute value of number
function checkNumber($number){
    if(abs($number - 100) <= 10 || abs($number - 200) <= 10){
        return true;
    }
    return false;
}

var_dump(checkNumber(103));
var_dump(checkNumber(90));
var_dump(checkNumber(89));