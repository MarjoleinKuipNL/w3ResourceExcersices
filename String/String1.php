<?php
// String exercises: change the case of letters ofr words
// PHp String: excercise 1 with solution
// Write a PHP script to : -

// a) transform a string all uppercase letters.
// b) transform a string all lowercase letters.
// c) make a string's first character uppercase.
// d) make a string's first character of all the words uppercase.
$string = "The quick brown fox jumps over the lazy dog.";
$allUpperCase = strtoupper($string); // string to upper case
$allLowerCase = strtolower($string); // string to lower case
$firstUpper = ucfirst($string); // uppercase first letter 
$firstLetterOfWordUpperCase = ucwords($string); // uppercase to all  words first characters;
echo $allUpperCase . "<br>";
echo $allLowerCase . "<br>";
echo $firstUpper . "<br>";
echo $firstLetterOfWordUpperCase . "<br>";