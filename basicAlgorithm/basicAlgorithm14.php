<?php
// PHP excersice Check two given integers whether either of them is in the range 100...200 inclusively
function range100to200($x, $y){
    return ($x >= 100 && $x <= 200 || $y >= 100 && $y <= 200);
}

var_dump(range100to200(100, 199));
var_dump(range100to200(250, 300));
var_dump(range100to200(105, 190));