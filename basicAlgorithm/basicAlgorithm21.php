<?php
// 21 write a php program to find the larger value from two positive integer values that is in the range 20..30
// function largerNumberInRange($x , $y){
//     return ($x <= 20 && $x >= 30 && $y <= 20 && $y >= 30) ? ($x > $y || $y < $x) :  0;
// }
function largerNumberInRange($x , $y){
    if($x >= 20 && $x <= 30 && $y >= 20 && $y <= 30){
        if($x >= $y){
            return $x;
        }else{
            return $y;
        }
    }else{
        return 0;
    }
}
echo largerNumberInRange(78, 95);
echo "<br><br>";
echo largerNumberInRange(20, 30);
echo "<br><br>";
echo largerNumberInRange(21, 25);
echo "<br><br>";
echo largerNumberInRange(28, 28);