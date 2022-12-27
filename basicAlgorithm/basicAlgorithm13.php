<?php
// PHP Excersice check if a given temperture is less than zero and the other greater 100

function thermometerWellSet($temperature1, $temperature2){
    return $temperature1 < 0 && $temperature2 > 100 || $temperature2 < 0  && $temperature1 > 100;
}

var_dump(thermometerWellSet(120, -1));
var_dump(thermometerWellSet(-1, 120));
var_dump(thermometerWellSet(2, 120));