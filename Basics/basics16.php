<?php
// 16. Write a PHP script to count number of lines in a file.
//Note : Store a text file name into a variable and count the number of lines of text it has. Go to the editor
$file = basename($_SERVER['PHP_SELF']);
$no_of_lines = count(file($file));
echo "There are $no_of_lines lines in $file"."\n";

?>