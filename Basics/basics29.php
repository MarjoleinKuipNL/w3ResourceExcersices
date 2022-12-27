<?php
// 29. Write a PHP script to get the names of the functions of a module. Go to the editor
//Note : Find XML, JSON functions etc.
print_r(get_extension_funcs("JSON"));
echo "\n";
echo "<br>";
print_r(get_extension_funcs("XML"));
echo "<br>";
?>