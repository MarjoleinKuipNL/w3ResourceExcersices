<?php
function range20to50($x, $y){
    return ($x >= 20 && $x <= 50) || ($y >= 20 && $y <= 50);
}
var_dump(range20to50(20, 84));
var_dump(range20to50(14, 50));
var_dump(range20to50(11, 45));
var_dump(range20to50(25, 40));