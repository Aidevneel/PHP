<?php

$a = ["apple","12.3","duplicate",89,null,47];
$aa = ["graps",22.2,"duplicate"];

echo "print_r";
echo "<pre>";
print_r($a);
echo "</pre>";

echo "<pre>";
print_r($aa);
echo "</pre>";
/*
echo "var_dump";
echo "<pre>";
var_dump($a);
echo "</pre>";

foreach ($a as $value){
    echo $value . "<br>";
}
*/
$b = ["fruit" => "apple",
"number" => "12.3",
"num" => 45.6,
"price" => 89,
"nothing" => null];

/*
foreach ($b as $key => $value){
    echo $key . "=" . $value . "<br>";
}
*/
echo "<pre>";
print_r($b);
echo "</pre>";


echo "<br>array count a:" . count($a);
echo "<br>array count b:" . count($b);
echo "<br>";

echo "<br> array_count_values will count how many time same value occurs in same array" ;
echo "<pre>";
print_r(array_count_values($a));
echo "</pre>";

echo "<br>array sizeof a:" . sizeof($a);
echo "<br>array sizeof b:" . sizeof($b);
echo "<br>";

echo "<br>search array in_array will return 1 if find value a: " . in_array('apple',$a);
echo "<br>search array in_array will return 1 if find value b: " . in_array(89,$b);
echo "<br>";

echo "<br>search array array_search will return index/key a: " . array_search('apple',$a);
echo "<br>search array array_search will return index/key b: " . array_search('apple',$b);
echo "<br>";

echo "<br>array_replace will replace 2nd array value in 1st array and create new array : ";
$newarray= array_replace($a,$aa);
echo "<pre>";
print_r($newarray);
echo "</pre>";

echo "<br>array_pop delete last value of array a : ";
array_pop($a);
echo "<pre>";
print_r($a);
echo "</pre>";

echo "<br>array_push insert value in last position of array a : ";
array_push($a,"new value","push");
echo "<pre>";
print_r($a); 
echo "</pre>";

echo "<br>array_shift will delete first value of array a : ";
array_shift($a);
echo "<pre>";
print_r($a); 
echo "</pre>";

echo "<br>array_unshift insert value in first position of array a : ";
array_unshift($a,"new value","unshift");
echo "<pre>";
print_r($a); 
echo "</pre>";

echo "<br>array_merge will merge all arrays values create new array 
(In case of same index in different associative array it will keep last array value and discard first array value): ";
$newarray= array_merge($a,$aa);
echo "<pre>";
print_r($newarray);
echo "</pre>";

echo "<br>array_merge_recursive will merge all arrays values create new array 
(In case of same index in different associative array it will create new internal associative array): ";
$newarray= array_merge_recursive($a,$aa);
echo "<pre>";
print_r($newarray);
echo "</pre>";

echo "<br>we can also combine multiple arrays values with addition + 
(In case of same index in different associative array it will keep 1st array value and discard next array value) in index array index values of different arrays are same, same index of next array will discarded";
$newarray= $aa + $a;
echo "<pre>";
print_r($newarray);
echo "</pre>";

/*
echo "<br> array_combine will combine two arrays, it will create new array : take 1st array values as key and 2nd array values as values(both arrays size has to be same)";
$aaa = ["banana","2",0000];
$newarray= array_combine($aa,$aaa);
echo "<pre>";
print_r($newarray);
echo "</pre>";

echo "<br>array_slice(arrayname, start from index, length) it will cut array part: ";
$newarray= array_slice($a,2,3);
echo "<pre>";
print_r($newarray); 
echo "</pre>";
$newarray= array_slice($a,-5,3);
echo "<pre>";
print_r($newarray); 
echo "</pre>";
*/
echo "<br>array_splice(arrayname, start from index, length,array2) it will replace array2 value in array1 , also use for delete array value";
array_splice($a,2,2,$aa);
echo "<pre>";
print_r($a); 
echo "</pre>";




?>