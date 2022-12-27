<?php
// 37 Write a PHP program to compute the sum of the prime numbers less than 100. Go to the editor
// Note: There are 25 prime numbers are there in less than 100.
// 2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97 and sum of all these numbers is 1060.
// beginning of my solution:
// function primeCheck(){
//     $number = 100;
//     for($i = 0; $i <= $number; $i++){
//         if($number == 1){
//             return;
//         }
//         for($i = 2; $i < $number/2; $i++ ){
//             if($number % $i == 0){
//                 return;
//             }else {
//                 echo $number;
//             }
//         }
//     }
   
// }
// primeCheck();
// w3resource solution:
$primes = array();
$is_prime_no = false;
for($i = 2; $i < 100; $i++){
    $is_prime_no = true;
    for($j =2; $j<=($i/2); $j++){
        if($i%$j==0){
            $is_prime_no = false;
            break;
        }

    }
    if($is_prime_no){
        array_push($primes, $i);
        echo $i;
        echo "<br>";
    }
    if(count($primes)==100){
        break;
    }

}
echo "All primes numbers under the 100 together make the sum:";
echo array_sum($primes)."\n";