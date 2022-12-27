<?php
// 2: Write a simple PHP class which displays an introductory message like "Hello All, I am Scott", where "Scott" is an argument value of the method within the class.
class User_message {
    public $message = "Hello All, I am";
    public function introduce($name){
        return $this->message.$name;
    } 
}
$my_message = new user_message();
echo $my_message->introduce('Marjolein')."\n";
