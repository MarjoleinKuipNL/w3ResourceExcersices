<?php
// 5. Write a PHP script to extract the file name from the following string.

// Sample String : 'www.example.com/public_html/index.php'
$path = "www.example.com/publix_html/index.php";
// strrchr - find the last occurrence of a character in a string
// Description strrchr(string $haystack, string $needle): string|false, this function returns the portion of haystack which starts at the last occurrence of neelde and goes until the end of haystack.
// Parameters: haystack - string to search in, needle - If needle contains more than one character, only the first is used. This behavior is different from that of strstr().
//Prior to PHP 8.0.0, if needle is not a string, it is converted to an integer and applied as the ordinal value of a character. This behavior is deprecated as of PHP 7.3.0, and relying on it is highly discouraged. Depending on the intended behavior, the needle should either be explicitly cast to string, or an explicit call to chr() should be performed.
// Return values: this function returns portion of string, or false if needle is not found

$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."<br>";
?>