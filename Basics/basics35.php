<?php
// 35. Write a PHP program to remove duplicates from a sorted list. Go to the editor
// example  Input: (1,1,2,2,3,4,5,5)
// example Output: (1,2,3,4,5)
// my solution does not work 
function has_dupes($array){
    $dupe_array = array();
    foreach($array as $val){
        if(++$dupe_array[$val] > 1){
            return array(++$dupe_array[$val]);
        }
    }
    return $array;
}

$array = has_dupes(1,1,2,2,3,4,5,5);
echo $array;

// w3resource solution:
function remove_duplicates_list($list1) {
    $nums_unique = array_values(array_unique($list1));
    return $nums_unique;
}
$nums = array(1,1,2,2,3,4,5,5);
print_r(remove_duplicates_list($nums));