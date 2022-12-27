<?php
// 14. Write a PHP script to print the next character of a specific character. Go to the editor
// PHP String Exercises: Print the next character of a specific character
// Write a PHP script to print the next character of a specific character.
// Sample character : 'a'
// Sample character : 'z'
$cha = 'z';
$next_cha = ++$cha;
// The following if condition prevent you to go beyond 'z' or 'Z' will reset to 'a' or 'A'.
if(strlen($next_cha) > 1){
    $next_cha = $next_cha[0];
}
echo $next_cha."<br>";
?>