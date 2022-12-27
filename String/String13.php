<?php
// 13. PHP String Exercises: Get the filename component of the specified path
// Write a PHP script to get the filename component of the following path.

// Sample path : "https://www.w3resource.com/index.php"
$path = 'www.example.com/public_html/index.php';
$file = basename($path, ".php");
echo $file."<br>";
?>