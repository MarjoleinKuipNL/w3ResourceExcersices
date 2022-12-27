<?php
// Excercise 22: write a PHP program to check if a given string contains between 2 and 4 'z' characters
function countZ($string){
    $ctr = 0;
    for ($i=0; $i < strlen($string); $i++) { 
        # code...
        if(substr($string, $i, 1) == 'z' || substr($string, $i, 1) == 'Z'){
            $ctr++;
        }
    }
    return $ctr > 1 && $ctr < 4;
}

var_dump(countZ("FRIZZ"));
var_dump(countZ("zane"));
var_dump(countZ("Zazz"));
var_dump(countZ("false"));