<?php
// PHP basic algorithm: Exercise-9
// Write a PHP program to create a new string with the last char 
// added at the front and back of a given string of length 1 or more.
function newStringWithLastChar($str){
    $s = substr($str, strlen($str)-1);
        return $s.$str.$s;
}
echo newStringWithLastChar("Red");
echo newStringWithLastChar("Green");
echo newStringWithLastChar("1");