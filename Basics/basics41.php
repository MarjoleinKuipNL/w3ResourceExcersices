<?php

// str_pad : This function returns the string string padded on the left, the right, or both sides to the specified padding length. If the optional argument pad_string is not supplied, the string is padded with spaces, otherwise it is padded with characters from pad_string up to the limit.
for($i = 1; $i < 7; $i++){
    for($j = 1; $j < 7; $j++){
        if($j == 1){
            // str_pad — Pad a string to a certain length with another string
            echo str_pad($i*$j, 2, " ", STR_PAD_LEFT) . "\n";;
        }else{
            echo str_pad($i*$j, 4, " ", STR_PAD_LEFT). "\n";
        }
    }
    echo "<br>";
}
?>