<?php
function test($x, $y){
    return $x == $y ? ($x + $y)*3 : $x + $y;
}
echo test(1,2). "\n"; // 3
echo test(3,2). "\n"; // 5 
echo test(2, 2) . ""; //12
?>