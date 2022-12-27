<?php
// 22. 22. Write a PHP script to get the full URL. Go to the editor
// solution geeks for geeks:
// Program to display URL of current page
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){
    $link = "https";
}else{
    $link = 'http';
}
// here append the common URL Characters.
$link .= "://";
// Append the host(domain name, ip) to the URL
$link .= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the url:
$link .= $_SERVER['REQUEST_URI'];

// Print the link
echo $link;

// solution w3resource:
$full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo $full_url;
?>