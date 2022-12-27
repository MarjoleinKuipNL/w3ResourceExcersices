<?php
// 27. Write a PHP script to get the directory path used for temporary files.
// create a temporary file in the temporary
// files directory using sys_get_temp_dir()
$temp_file =tempnam(sys_get_temp_dir(), 'Tux');
echo $temp_file."\n";