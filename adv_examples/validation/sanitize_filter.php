<?php

$var = "ne(.el)@g//.com";
$data = filter_var($var,FILTER_SANITIZE_EMAIL);
echo $data . "<br>";
var_dump(filter_var($data,FILTER_VALIDATE_EMAIL));
echo "<br><br>";

$var = "http s://www. goog le.co  m";
$data = filter_var($var,FILTER_SANITIZE_URL);
echo $data . "<br>";
var_dump(filter_var($data,FILTER_VALIDATE_URL));
echo "<br><br>";

$var = "@*4.x55ac";
$data = filter_var($var,FILTER_SANITIZE_NUMBER_INT);
echo $data . "<br>";
var_dump(filter_var($data,FILTER_VALIDATE_INT));
echo "<br><br>";

$var = "@*4.x55ac";
$data = filter_var($var,FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
echo $data . "<br>";
var_dump(filter_var($data,FILTER_VALIDATE_FLOAT));
echo "<br><br>";

$var = "<h1>neel $ shahÆÞ</h1>";
$data = filter_var($var,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
echo $data . "<br><br>";

$var = "<h1>neel $ shahÆÞ</h1>";
$data = filter_var($var,FILTER_SANITIZE_ENCODED,FILTER_FLAG_STRIP_HIGH);
echo $data . "<br><br>";

$var = "<h1>neel $ shahÆÞ</h1>";
$data = filter_var($var,FILTER_SANITIZE_SPECIAL_CHARS,FILTER_FLAG_STRIP_HIGH);
echo $data . "<br><br>";

?>