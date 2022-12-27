<?php
//39  Write a PHP program to get the size of a file.
function get_size_of_file($file){
    fopen($file) or die("Unable to open file");
    $txt = "PHP Exercises <br>";
    fwrite($file, $txt);
    $txt = "from <br>";
    fwrite($file, $txt);
    $txt = "w3resource\n";
    fwrite($file, $txt);
    $fclose();
    echo "size of the file". filesize($file)."\n";
}

get_size_of_file();