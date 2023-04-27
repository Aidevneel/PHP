<?php


$a = "Hi this iS neel ShaH is";
echo "original string : ".$a . "<br>";

$newstring = strlen($a);
echo "strlen : ".$newstring . "<br>";

$newstring = str_word_count($a);
echo "str_word_count : ". $newstring . "<br>";

$newstring = substr_count($a, "is");
echo "substr_count :". $newstring . "<br>";

$newstring = strtolower($a);
echo "strtolower : ".$newstring . "<br>";

$newstring = strtoupper($a);
echo "strtoupper : ".$newstring . "<br>";

$newstring = lcfirst($a);
echo "lcfirst : ".$newstring . "<br>";

$newstring = ucfirst($a);
echo "ucfirst : ".$newstring . "<br>";
/*
$newstring = ucword($a);
echo "ucword : ".$newstring . "<br>";
*/
$newstring = strpos($a,"is");
echo "strpos : ".$newstring . "<br>";

$newstring = strrpos($a,"is");
echo "strrpos : ".$newstring . "<br>";

$newstring = stripos($a,"is");
echo "stripos : ".$newstring . "<br>";

$newstring = strripos($a,"is");
echo "strripos : ".$newstring . "<br>";

$newstring = strstr($a,"is");
echo "strstr : ".$newstring . "<br>";

$newstring = strchr($a,"is",true);
echo "strchr : ".$newstring . "<br>";

$newstring = strrchr($a,"is");
echo "strrchr : ".$newstring . "<br>";

$newstring = stristr($a,"is",true);
echo "stristr : ".$newstring . "<br>";

$newstring = strpbrk($a,"si");
echo "strpbrk : ".$newstring . "<br>";

?>