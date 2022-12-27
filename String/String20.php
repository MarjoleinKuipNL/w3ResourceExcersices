<?php
//PHP String: Exercise-20 
// Write a PHP Script to remove part of String

// original String: 'The quick brown fox jumped over the lazy dog'
// Remove 'fox' from the above the above string;
$my_string = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_string)."<br>";
?>