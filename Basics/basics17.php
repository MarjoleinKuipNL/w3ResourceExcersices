<?php

// 17. Write a PHP script to print current PHP version. Go to the editor
// Note : Do not use phpinfo() function.
echo "Current PHP Version: " . phpversion();
echo '<br>';
// prints e.g. '2.0' or nothing if the extension isn't enabled
echo phpversion('tidy')."\n";
?>