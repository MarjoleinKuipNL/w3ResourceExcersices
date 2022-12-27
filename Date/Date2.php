<?php
// 2. Create a simple 'birthday countdown' script, the script will count the number of days between current day and birthday. 
$target_days = mktime(0,0,0,9,12,2021);// modify the birth day 12/31/2013
$today = time();
$diff_days = ($target_days - $today);
$days = (int)($diff_days/86400);
print "Days till next birthday: $days days!"."<br>";