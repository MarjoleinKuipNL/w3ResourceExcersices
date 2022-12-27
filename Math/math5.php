<?php
// PHP Date Exercises: Convert a date from yyyy-mm-dd to dd-mm-yyyy
// PHP date: Exercise-5 with Solution
// Write a PHP script to convert a date from yyyy-mm-dd to dd-mm-yyyy.

$oldDate = "2012-09-12";
$newDate = date("d-m-Y", strtotime($oldDate));
echo $newDate."<br>";