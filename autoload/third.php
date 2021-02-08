<?php
// reqyuire niche wale code ko minimize krne ke liye autoload function use karate hai
// require "first.php";
// require "second.php";
function __autoload($class){
    require $class . ".php"; 

}
$test = new first();

$test1 = new second();


?>