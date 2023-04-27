<?php

$a = ["fruit" => "Apple",
"num" => 45.6,
"price" => 89,
"nothing" => "green"];

$b = ["fruit" => "apple",
"num2" => 45.6,
"rate" => 80,
"nothing" => "green"];

$intersect = array_intersect($a,$b);
echo "<pre>";
print_r($intersect);
echo "</pre>";

$intersect = array_intersect_key($a,$b);
echo "<pre>";
print_r($intersect);
echo "</pre>";

$intersect = array_intersect_assoc($a,$b);
echo "<pre>";
print_r($intersect);
echo "</pre>";

function funct($a,$b){
    if($a === $b){
        return 0;
    }
    return ($a > $b)? 1 : -1;
}

$intersect = array_intersect_uassoc($a,$b,"funct");
echo "<pre>";
print_r($intersect);
echo "</pre>";

$intersect = array_intersect_uassoc($a,$b,"strcasecmp");
echo "<pre>";
print_r($intersect);
echo "</pre>";

$intersect = array_intersect_ukey($a,$b,"funct");
echo "<pre>";
print_r($intersect);
echo "</pre>";

$intersect = array_uintersect($a,$b,"compare");
echo "<pre>";
print_r($intersect);
echo "</pre>";
?>
