<?php
// 6. Write a PHP script to extract the user name from the following email ID.

// Sample String : 'rayy@example.com'
$mailid = "rayy@example.com";
// strstr- find the first occurrence of a string
// Description - strstr(string $haystack, string $needle, bool $before_needle = false): string|false
// Returns part of haystack string starting from and including the first occurrence of needle to the end of haystack.
// Note: This function is case-sensitive. For case-insensitive searches, use stristr().
// Note: If you only want to determine if a particular needle occurs within haystack, use the faster and less memory intensive function strpos() instead.
// Parameters: haystack - the input string, needle - prior to PHP 8.0.0 if needle is not a string, it is converted to an integer and applied as the ordinal value of a character. This behavior is deprecated as of PHP 7.3.0, and relying on it is highly discouraged. Depending on the intended behavior, the needle should either be explicitly cast to string, or an explicit call to chr() should be performed.
// before_needle - if true, strstr() returns the part of the haystack before the first occurrence of the needle(excluding the needle).
// Return values: Returns the portion of string, or false if needle is not found

$user = strstr($mailid, '@', true);
echo $user . "<br>";
?>