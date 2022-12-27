<?php
// 30. Write a PHP script to get the time of the last modification of the current page Go to the editor

// mysolution:
$current_file_name = basename($_SERVER['PHP_SELF']);
$file_last_modified = filemtime($current_file_name);
echo "Last modified " . date("h:i:s", $file_last_modified);
// solution w3resource
echo "Last modified: " . date("F d Y H:i:s", getlastmod())."\n";
?>