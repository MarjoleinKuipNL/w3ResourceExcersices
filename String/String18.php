<?php
// 18. PHP STRING Exercises: Get the first word of a sentence.
// Write a PHP script to get the first word of a sentence.
// original String: 'The quick brown fox'
$s = 'The quick brown fox';
$arr = explode(' ', trim($s));
echo $arr[0].'<br>';
?>