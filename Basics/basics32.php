<?php
//  Write a PHP program to check whether a number is an Armstrong number or not. Return true if the number is Armstrong otherwise return false.
// Note: An Armstrong number of three digits is an integer so that the sum of the cubes of its digits is equal to the number itself. For example, 153 is an Armstrong number since 1**3 + 5**3 + 3**3 = 153


// the logic:
// Take the number.
// store it in a variable;
// take a variable for sum;
// solution Java tpoint
$number = 407;
$total = 0;
$x = $number;
while($x!=0){
$rem=$x%10;
$total=$total+$rem*$rem*$rem;
$x=$x/10;
}
if($number == $total){
    echo "Yes it is an Armstrong number.";
}else{
    echo "No it is not an Armstrong number.";
}
// solution w3resource:
function armstrong_number($num){
    $sl = strlen($num);
    $sum = 0;
    $num = (string)$num;
    for($i = 0; $i <$sl; $i++){
        // pow = pow — Exponential expression
        $sum = $sum + pow((string)$num{$i}, $sl);
    }
    if((string)$sum == (string)$num){
        return "True";
    }else {
        return "false";
    }
}

echo "Is 153 Armstrong number? " . armstrong_number(153);
echo "<br>Is 21 Armstrong number? " . armstrong_number(21);
echo "<br>Is 4587 Armstrong number? " . armstrong_number(4587);
?>