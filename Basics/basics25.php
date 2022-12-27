<?php 
// 25. Write a PHP script to get the document root directory under which the current script is executing, 
// as defined in the server's configuration file. Go to the editor
// both solutions work

// mysolution
echo $_SERVER['DOCUMENT_ROOT'];

// solution w3resources
// getenv() get the value of aenvironment variable
$rd = getenv('DOCUMENT_ROOT');
echo $rd."\n";
?>