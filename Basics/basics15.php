<?php
// 15. Write a PHP script to get last modified information of a file. Go to the editor
// Sample filename : php-basic-exercises.php
// Sample Output : Last modified Monday, 26th June, 2017, 12:43pm
// my solution:
$filename = 'basics1-2.php';
if(file_exists($filename)){
    echo "$filename was last modified : " . date("F d Y H:i:s", filemtime($filename));
}
// w3resource solution:
$current_file_name = basename($_SERVER['PHP_SELF']);
$file_last_modified = filemtime($current_file_name);
echo "Last modified " . date("l, dS F, Y, h:ia", $file_last_modified)."\n";
?>