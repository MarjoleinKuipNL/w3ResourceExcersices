<?php
// 24 write a php program to convert the last 3 characters of a given string in upper case. 
//if the length of the string has less then 3 then uppercase all the characters.
function last3toUppercase($string){
    return strlen($string) < 3 ? 
        strtoupper($string) :  
        substr($string, 0, strlen($string) - 3).strtoupper(substr($string, strlen($string) -3));
}

echo last3toUppercase("Python")."\n";
echo last3toUppercase("Javascript")."\n";
echo last3toUppercase("js")."\n";
echo last3toUppercase("PHP")."\n";