<?php
// 12.  Write a simple PHP program to check that emails are valid
// Hints : Use FILTER_VALIDATE_EMAIL filter that validates value as an e-mail address.
// Note : The PHP documentation does not say that FILTER_VALIDATE_EMAIL should pass the RFC5321.
$email = 'marjoleinkuip@hotmail';
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo '"'. $email .'" = valid'."\n";
}else{
    echo '"'. $email .'" = invalid .'."\n";
}
?>
