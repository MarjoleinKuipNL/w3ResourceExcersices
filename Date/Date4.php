<?php
// 4 write a php script to calculate the difference between two dates. 
// sample dates : 1981-11-04, 2013-09-04
$startDate = "1981-11-04";
$endDate = "2013-09-04";

$date_difference = abs(strtotime($endDate) - strtotime($startDate));

$years = floor($date_difference /(365*60*60*24));
$months = floor(($date_difference - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($date_difference - $years * 365*60*60*24 -$months*30*60*60*24) / (60*60*24));
printf("%d years, %d months, %d days,", $years, $months,$days);