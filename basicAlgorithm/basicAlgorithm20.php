<?php 
// PHP Excerxises: Check whether two given integers are in the range 40...50 inclusive
function inRange40to50Or50to60($x, $y){
    return ($x >= 40 && $x <= 50 && $y >= 40 && $y <= 50) || ($y >= 50 && $x <= 60 && $x >= 50 && $x <= 60);
}

var_dump(inRange40to50Or50to60(78, 95));
var_dump(inRange40to50Or50to60(25, 35));
var_dump(inRange40to50Or50to60(40, 50));
var_dump(inRange40to50Or50to60(55, 60));