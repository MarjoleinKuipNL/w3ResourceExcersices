<?php
// 11. Write a PHP script to redirect a user to a different page
// my solution:
header('Location: https://www.w3resource.com/');
exit(); 
// getest en werkt
// solution from w3resource is the same


// header() function:
// Syntax
// void header ( string $header [, bool $replace = TRUE [, int $http_response_code ]] )
// parameters:
// header: The header string.
// replace: The optional replace parameter indicates whether the header should replace a previous similar header, or add a second header of the same type.
// http_response_code: Forces the HTTP response code to the specified value. Note that this parameter only has an effect if the header is not empty.
?>