<?php

// PHP Basic Algorithm: Exercise-7 
// write a php program to excange the first and last character in a given string
function exchangeFirstAndLastChar($string){
    return strlen($string) > 1 ? substr($string, strlen($string)-1).substr($string, 1, strlen($string)-2).substr($string, 0, 1): $string;
}

echo exchangeFirstAndLastChar('abcd')."\n";
echo exchangeFirstAndLastChar('a')."\n";
echo exchangeFirstAndLastChar('xy')."\n";