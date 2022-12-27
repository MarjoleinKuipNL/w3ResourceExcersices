<?php 
function password_generate($chars){
    $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    return substr(str_shuffle($data), 0, $chars);
}

echo password_generate(7)."<br>";
echo password_generate(10)."<br>";
echo password_generate(12)."<br>";