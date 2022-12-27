<?php 
function valid_email($email){
    $result = trim($email);
    if(filter_var($result, FILTER_VALIDATE_EMAIL)){
        return "true";
    }else {
        echo "FALSE";
    }
}
echo valid_email("abc@hotmail.com"). "<br>";
echo valid_email("abc#hotmail.com") . "<br>";