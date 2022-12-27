<?php
//  Write a PHP function to round a float away from zero to a specified number of decimal places

// sample Data: 
// (78.78001, 2)
// (8.131001, 2)
// (0.586001, 4)
// (-.125481, 3)
// -.125481
$number1 = 78.78001;
$number2 = 8.131001;
$number3 = 0.586001;
$number4= -.125481;
$number5 = -.125481;
function roundout($value, $places=0) {
    if($places < 0) {
        $places = 0;
    }
    // pow = exponentieel expressie 
    // pow ( int|float $base , int|float $exp ) : int|float
    // Returns base raised to the power of exp.
    // parameters : 
    // base:  the base to use, exp: The exponent  
    // Return Values: base raised to the power of exp. If both arguments are non-negative integers and the result can be represented as an integer, the result will be returned with int type, otherwise it will be returned as a float.
    $x = pow(10, $places);
    // ceil — Round fractions up
    // Description : ceil ( float $value ) : float,  Returns the next highest integer value by rounding up value if necessary.
    // Parameters: value: the value to round
    // Return Values: value rounded up to the next highest integer. The return value of ceil() is still of type float as the value range of float is usually bigger than of int
    // floor - round fractions down
    // Description: floor ( float $value ) : float, Returns the next lowest integer value(as float) by rounding donw value if nessesarry
    // Parameters: value: the numeric value to round
    // Return Value: value rounded to the next lowest integer. the return value of floor is still of type float because the value range of float is usually bigger than that of int. this function retufns false in case of an error.
    return ($value >= 0 ?  ceil($value * $x):floor($value * $x)) / $x;
}
echo roundout($number1, 2). "<br>";
echo roundout($number2, 2). "<br>";
echo roundout($number3, 4). "<br>";
echo roundout($number4, 3). "<br>";
echo roundout($number5). "<br>";
?>