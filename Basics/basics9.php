<?php
// 9. Write a PHP script, which changes the color of the first character of a word.
// my solution: 
$string =  "PHP Tutorial";
$firstCharacter = substr($string, 0, 1);
$restOfCharacters = substr($string, 1);
echo '<span style="color:#AFA;text-align:center;">'. $firstCharacter . '</span>' . $restOfCharacters;
echo '<br>';
// w3resource solution:
$text = "PHP Tutorial";
$text = preg_replace('/(\b[a-z])/i', '<span style="color:red">1</span>', $text);
echo $text;
?>