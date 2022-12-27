<?php
// 34. Write a PHP program to check the bits of the two given positions of a number are same or not
// 112 - > 01110000
// Test 2nd and 3rd position
// Result: true
// Test 4nd and 5rd position
// Result: false
function test_bit_position($num, $pos1, $pos2){
    $pos1--;
    $pos2--;
    $bin_num = strrev(decbin($num));
    if($bin_num[$pos1] == $bin_num[$pos2]){
        return "true";
    }else {
        return "false";
    }
}
echo test_bit_position(236, 5,6)."\n";