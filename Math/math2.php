<?php
// PHP Math Exercises: Rounds the specified values with 1 decimal digit precision
// PHP math: Exercise-2 with Solution
// Write a PHP script which rounds the following values with 1 decimal digit precision.

// Sample values :
// 1.65
// 1.65
// -1.54
echo round(1.65, PHP_ROUND_HALF_UP)."<br>";
echo round(1.65, PHP_ROUND_HALF_DOWN)."<br>";
echo round(-1.54, PHP_ROUND_HALF_EVEN)."<br>";