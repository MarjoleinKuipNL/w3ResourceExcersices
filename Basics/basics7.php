<?php
// 7. Write a PHP script to get the current file name.
// mysolution:
echo 'Your server filename is:' . $_SERVER["SCRIPT_FILENAME"];
echo '<br>';
// online solution:
$current_file_name = basename($_SERVER['PHP_SELF']);
echo $current_file_name."\n";

?>