<?php

/*

it is removed in php8

function __autoload($class){
    require "classfiles/" . $class . ".php";
}
*/

spl_autoload_register(function ($class_name) {
    require "classfiles/" . $class_name . ".php";
});


$obj = new abc();

$obj = new xyz();


?>