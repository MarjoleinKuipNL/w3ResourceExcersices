<?php 
// 5. Write a PHP script to get the client IP address

// Whether IP is from shared internet
if(!empty($_SERVER['HTTP_CLIENT_IP'])){
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
}
// whether IP is from proxy
elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
// wheter ip is from remote address
else{
    $ip_address = $_SERVER['REMOTE_ADDR'];
}
echo $ip_address;
?>