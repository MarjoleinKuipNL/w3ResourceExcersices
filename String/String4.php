<?php
// 4. write a script to convert the value of a PHP variable to string
$x = 20;        // $x is an integer
$str1 = (string)$x; // $x is an string now
// check wheter $x and $str1 are equal or not
if($x === $str1){
    echo "They are the same"."<br>";
}else{
    echo "They are not the same". "<br>";
}

?>