<?php

$var = 22;
$options = array("options"=>array(
                    "min_range" => 20,
                    "max_range"=> 30
                )
            );
var_dump(filter_var($var,FILTER_VALIDATE_INT,$options));
echo "<br>";

$var = 23.2;
$options = array("options"=>array(
                    "min_range" => 20,
                    "max_range"=> 30
                )
            );
var_dump(filter_var($var,FILTER_VALIDATE_FLOAT,$options));
echo "<br>";

$var = true; // true/false/1
var_dump(filter_var($var,FILTER_VALIDATE_BOOLEAN,FILTER_NULL_ON_FAILURE));
echo "<br>";

$var = "neel@g.com";
var_dump(filter_var($var,FILTER_VALIDATE_EMAIL));
echo "<br>";

$var = "https://google.com/test/abc.php?id=23";
var_dump(filter_var($var,FILTER_VALIDATE_URL,FILTER_FLAG_PATH_REQUIRED));
echo "<br>";
var_dump(filter_var($var,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED));
echo "<br>";

$var = "192.168.1.1";
var_dump(filter_var($var,FILTER_VALIDATE_IP));
echo "<br>";

$var = "FA-F9-DD-B2-5E-0D";
var_dump(filter_var($var,FILTER_VALIDATE_MAC));
echo "<br>";
?>