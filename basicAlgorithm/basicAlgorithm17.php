<?php
// 17. Write a php program to check if a string 'yt' appears at index 1 in a given string. if it appear return a string without yt otherwise return the string without
function checkOnYt($string){
    return substr($string, 1, 2) == 'yt' ? substr($string, 0, 1).substr($string, 3, strlen($string)-2): $string;
}

echo checkOnYt("Python")."\n";
echo checkOnYt("ytade")."\n";
echo checkOnYt("jsues")."\n";