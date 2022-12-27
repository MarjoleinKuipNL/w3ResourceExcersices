<?php
function random_float($start_number = 0, $end_number = 1, $mul=1000000){
    if($start_number > $end_number) {
        return $false;
    }
    // mt_rand — Generate a random value via the Mersenne Twister Random Number Generator
    // Description: mt_rand () : int, mt_rand(int $min, int $max): int, Caution: This function does not generate cryptographically secure values, and should not be used for cryptographic purposes. If you need a cryptographically secure value, consider using random_int(), random_bytes(), or openssl_random_pseudo_bytes() instead. Many random number generators of older libcs have dubious or unknown characteristics and are slow. The mt_rand() function is a drop-in replacement for the older rand(). It uses a random number generator with known characteristics using the » Mersenne Twister, which will produce random numbers four times faster than what the average libc rand() provides.

    // If called without the optional min, max arguments mt_rand() returns a pseudo-random value between 0 and mt_getrandmax(). If you want a random number between 5 and 15 (inclusive), for example, use mt_rand(5, 15) 
    // Parameters: min: optional lowest value to be returned(default: 0), max: optional highest value to be returned (default: mt-getrandmax())
    // Return values : A random integer between min(or 0) and max(or mt_getrandmax, inclusive) or false if max is less than min.
    
    return mt_rand($start_number* $mul, $end_number * $mul) / $mul;
   
}
echo random_float()."<br>";
echo random_float(0.6)."<br>";
echo random_float(0.5, 0.6). "<br>";
echo random_float(0, 20). "<br>";
echo random_float(0, 3, 2). "<br>"; 
echo random_float(0, 2, 20). "<br>";
?>