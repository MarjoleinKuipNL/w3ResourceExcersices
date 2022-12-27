<?php
// PHP excercise 11 create a new string taking the first 3 characters of
// a given string and return the string with the 3 characters added at both the front and back

// PHP Basic algorithm: Excercise 11 

// Write a PHP program to create a new string taking the first 3 characters of a given '
// string and return the string with the 3 characters added at both the front and back. if the given string length is less than 3, use whatever characters are there and
function returnStringWith3Character($string){
    if(strlen($string) < 3){
        return $string.$string.$string;
    }else{
        $front = substr($string, 0 , 3);
        return $front.$string.$front;
    }
}

echo returnStringWith3Character("Python")."\n";
echo returnStringWith3Character("JS")."\n";
echo returnStringWith3Character("Code")."\n";