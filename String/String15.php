<?php
// 15. Write a PHP script to remove a part of a string from the beginning.
$sub_string = "rayy@";
$str = 'rayy@example.com';
if(substr($str, 0, strlen($sub_string)) == $sub_string){
    $str = substr($str, strlen($sub_string));
}
echo $str."<br>";
?>