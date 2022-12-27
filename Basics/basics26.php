<?php 
// 26. Write a PHP script to get the information about the operating system PHP is running on. Go to the editor

// my solution
function getOSInformation(){
    if(false == function_exists("shell_exec") ||
         false == is_readable("/etc/os-release")){
        return null;
    }
    $os = shell_exec('cat /etc/os-release');
    $listIds = preg_match_all('/.*=/', $os, $matchListIds);
    $listIds = $matchlistIds[0];

    $listVal = preg_match_all('/=.*/', $os, $matchVal);
    $listVal = $matchlistVal[0];

    array_walk($listIds, function(&$v, $k){
        $v = strtolower(str_replace('=', '', $v));
    });

    array_walk($listVal, function(&$v, $k){
        $v = preg_replace('/=|"/', '', $v);
    });

    return array_combine($listIds, $listVal);
}

// solution w3resource
echo php_uname() . "\n";
echo PHP_OS."\n";
if(strtoupper(substr(PHP_OS, 0, 3)) === 'WIN'){
    echo 'This is a server using windows!';
} else {
    echo 'This is a server not using Windows!'."\n";
}
?>