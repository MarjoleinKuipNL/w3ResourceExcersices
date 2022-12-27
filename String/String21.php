<?php
// PHP String Exercises: Remove trailing slash from a string
// write a php script to remove trailing slashes from a String
// Original String: 'The quick brown fox jumps over the lazy dog.///';

$my_string="The quick brown fox jumps over the lazy dog.///";
echo rtrim($my_string, '/')."<br>";