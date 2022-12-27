<?php

// 3. Write a PHP program to check two given 
//integers, and return 
//true if one of them is 30 or if their sum is 30.
function testMyfunction($x, $y){
    if($x == 30 || $y == 30 || $x + $y == 30){
        return true;
    }else {
        return false;
    }
}
var_dump(testMyfunction(30,0));
var_dump(testMyfunction(25, 5));
var_dump(testMyfunction(20,30));
var_dump(testMyfunction(20, 25));
echo "<br><br>";
function testFunctionW3resource($x, $y){
    return ($x == 30) || ($y == 30) || ($x + $y == 30);
}
var_dump(testFunctionW3resource(30, 0));
var_dump(testFunctionW3resource(25, 5));
var_dump(testFunctionW3resource(20, 30));
var_dump(testFunctionW3resource(20, 25));

?>