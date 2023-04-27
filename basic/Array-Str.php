<?php

$a =["green","red","blue","white","pink"];
echo implode(" is ", $a); 
echo "<br>";

$str = "green is. red is .blue .is white is. pink";
$array = explode(" .", $str); 
echo "<pre>";
print_r($array);
echo "</pre>";

$string = "schools";
$array = str_split($string,2); 
echo "<pre>";
print_r($array);
echo "</pre>";

$newstring = chunk_split($string,2,".."); 
echo "$newstring";

?>