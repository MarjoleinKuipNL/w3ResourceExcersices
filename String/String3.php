<?php
// 3. PHP String Exercises: Check whether a string contains a specific string
// Write a PHP script to check whether a string contains a specific string?

// Sample string : 'The quick brown fox jumps over the lazy dog.'
// Check whether the said string contains the string 'jumps'.
$str1 = 'The quick brown fox jumps over the lazy dog';
// strpos - find the position of the first occutrence of a substring in a string
// Description: strpos(string $haystack, string $needle, int $offset = 0): int|false, Find the numeric position of the first occurrence of needle in the haystack string 
// parameters: haystack - the string to search in, needle - Prior to PHP 8.0.0, if needle is not a string, it is converted to an integer and applied as the ordinal value of a character. This behavior is deprecated as of PHP 7.3.0, and relying on it is highly discouraged. Depending on the intended behavior, the needle should either be explicitly cast to string, or an explicit call to chr() should be performed., offset - If specified, search will start this number of characters counted from the beginning of the string. If the offset is negative, the search will start this number of characters counted from the end of the string.
// Return Values: Returns the position of where the needle exists relative to the beginning of the haystack string (independent of offset). Also note that string positions start at 0, and not 1.

// Returns false if the needle was not found.
if(strpos($str1, 'jumps' !== false)){
    echo 'The specified word is present';
}else {
    echo 'The specified word is not present';
}