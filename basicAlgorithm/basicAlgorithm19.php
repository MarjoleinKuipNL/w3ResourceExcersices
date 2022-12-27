<?php

function nearestTo100($x, $y){
    $number = 100;
    $val = abs($x - $number);
    $val2 = abs($y - $number);
    return $val == $val2 ? 0 : ($val < $val2 ? $x : $y);
}

echo nearestTo100(78, 95)."\n";
echo nearestTo100(95, 95)."\n";
echo nearestTo100(99, 70)."\n";