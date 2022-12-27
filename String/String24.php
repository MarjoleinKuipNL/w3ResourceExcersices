<?php
// PHP String Exercises: Select first 5 words from the specified string
// Write a PHP script to select first 5 words from the following String
// Sample String : 'The quick brown fox jumps over the lazy dog';
$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string),0, 5))."<br>";
?>