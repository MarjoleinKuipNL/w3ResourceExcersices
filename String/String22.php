<?php
// 22. PHP String Exercises: Get the characters after the last '/' in an url
// Write a php script to get the characters after the last '/' in an url.
// Sample URL: 'http://www.example.com/5478631';
$my_url = 'http://www.example.com/5478631';
echo substr($my_url, strrpos($my_url, '/')+1)."<br>";
?>