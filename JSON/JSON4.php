<?php
// 4 Write a PHP function to display JSON decode errors.
function json_error_message($json_str){
    $json[] = $json_str;
    echo $json;
    foreach($json as $string){
        echo 'Decodeing: ' . $string . "<br>";
        json_decode($string);

        switch(json_last_error()){
            case JSON_ERROR_NONE:
                echo ' - No errors'."<br>";
                break;
            case JSON_ERROR_DEPTH:
                echo '- Maximum tack depth exceeded'.'<br>';
                break;
            case JSON_ERROR_STATE_MISMATCH:
                echo ' - underflow or the modes mismatch'.'<br>';
                break;
            case JSON_ERROR_CTRL_CHAR:
                echo '-unexpected control character found'. '<br>';
                break;
            case JSON_ERROR_SYNTAX:
                echo '- Syntax error, malformed JSON'."<br>";
                break;
            case JSON_ERROR_UTF8:
                echo ' - Malformed UTF-8 characters, possibly incorrectly encoded'."<br>";
                break;
            default:
                echo ' -  Unknown Error -'."<br>";
            break;
        }
    }
}
json_error_message('{"color1": "Red color"}');
?>