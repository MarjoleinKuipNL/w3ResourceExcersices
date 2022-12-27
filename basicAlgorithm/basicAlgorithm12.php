<?php
// PHP excercise 12: Check if a given string starts with 'C#' or not
function startsWithCSharp($string){
    return (strlen($string)< 3 && $string=="C#") || (substr($string, 0 , 2) == "C#" && substr($string, 1 , 2) == ' '); 
}
var_dump(startsWithCSharp("C# sharp"));
var_dump(startsWithCSharp("C#sharp"));
var_dump(startsWithCSharp("C++"));