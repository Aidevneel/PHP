<?php


$a = "Hi this iS neel ShaH is";
echo "original string : ".$a . "<br>";
echo  " sub string replace" . "<br>";
echo "<br>";
$newstring = substr($a,3,13);
echo "substr : ".$newstring . "<br>";

$newstring = str_replace("is","are",$a);
echo "str_replace : ".$newstring . "<br>";

$newstring = str_ireplace("is","are",$a);
echo "str_ireplace : ".$newstring . "<br>";

$newstring = substr_replace($a,"are",3,5);
echo "substr_replace : ".$newstring . "<br>";

$newstring = strtr($a,"i","A");
echo "strtr : ".$newstring . "<br>";

$newstring = strrev($a);
echo "strrev : ".$newstring . "<br>";

$newstring = str_repeat($a,3);
echo "str_repeat : ".$newstring . "<br>";

$newstring = str_shuffle($a);
echo "str_shuffle : ".$newstring . "<br>";

echo "<br>" . " compare two string" . "<br>";
echo "<br>";

$a = "Neel Shah";
echo "original string a: ".$a . "<br>";
$b = "Neel shaH";
echo "original string b: ".$b . "<br>";

$newstring = strcmp($a,$b);
echo "strcmp : ".$newstring . "<br>";

$newstring = strcasecmp($a,$b);
echo "strcasecmp : ".$newstring . "<br>";

$newstring = strncmp($a,$b,6);
echo "strncmp : ".$newstring . "<br>";

$newstring = strncasecmp($a,$b,9);
echo "strncasecmp : ".$newstring . "<br>";
/*
$newstring = substr_compare($a,$b,4,5,true);
echo "substr_compare : ".$newstring . "<br>";

$newstring = similar_text($a,$b);
echo "similar_text : ".$newstring . "<br>";
*/
$newstring = strnatcmp($a,$b);
echo "strnatcmp : ".$newstring . "<br>";

$newstring = str_pad($a,15,"***",STR_PAD_BOTH);
echo "strcmp : ".$newstring . "<br>";

$newstring = strcmp($a,$b);
echo "strcmp : ".$newstring . "<br>";

$newstring = strcmp($a,$b);
echo "strcmp : ".$newstring . "<br>";

echo "<br>" . " trim" . "<br>";
echo "<br>";

$newstring = trim($a,"Nha");
echo "trim : ".$newstring . "<br>";

$newstring = ltrim($a,"Nha");
echo "ltrim : ".$newstring . "<br>";

$newstring = rtrim($a,"Nha");
echo "rtrim : ".$newstring . "<br>";

$newstring = chop($a,"Nha");
echo "chop : ".$newstring . "<br>";

?>