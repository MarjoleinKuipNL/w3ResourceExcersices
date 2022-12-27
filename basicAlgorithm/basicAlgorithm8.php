<?php 
// Basic algorithm Excercise-8
// Write a PHP program to create a new string which is 4 copies of the 2 front characters of a given string.
// if the given string length is less than 2 return the original string.
function test($str){
    return strlen($str) < 2 ? $str : substr($str, 0, 2).substr($str, 0, 2).substr($str, 0, 2).substr($str, 0, 2);
}

echo test("C sharp")."\n";
echo test("JS")."\n";
echo test("a")."\n";