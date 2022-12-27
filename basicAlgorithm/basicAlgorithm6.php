<?php
// PHP Basic Algorithm: Exercise-6 with Solution
// Write a PHP program to remove the character in a given position of a given string. 
// The given position will be in the range 0..string length -1 inclusive.
function test($s, $n){
    return substr($s, 0, $n).substr($s, $n+1, strlen($s)-$n);
}

echo test("Python", 1)."\n";
echo test("Python", 0)."\n";
echo test("Python", 4)."\n";