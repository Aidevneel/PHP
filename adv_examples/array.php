<?php

$a = ["apple","12.3",45.6,89,null];

echo "<pre>";
print_r($a);
echo "</pre>";


echo "<pre>";
var_dump($a);
echo "</pre>";

foreach ($a as $value){
    echo $value . "<br>";
}

$b = ["fruit" => "apple",
"number" => "12.3",
"num" => 45.6,
"price" => 89,
"nothing" => null];

foreach ($b as $key => $value){
    echo $key . "=" . $value . "<br>";
}

$emp = [
    [1,"krishna",2005],
    [2,"amit",2805],
    [3,"hasmukh",2605],
    [4,"neel",2905],
];
echo "<br>";
echo "multidimensional array";

echo "<pre>";
print_r($emp);
echo "</pre>";

for($row = 0; $row < 4 ; $row++){
    for ($col = 0; $col < 4; $col++){
        echo $emp[$row][$col]. " ";
    }
    echo "<br>";
}

echo "<br>";

foreach($emp as $row){
    foreach($row as $col){
    echo $col . " ";
    }
    echo "<br>";
}

echo "<br>";
echo "multidimensional associative array ";
$stu = [
    "neel" =>["rollnumber"=>1,"Bmonth"=>"march","year"=>2005],
    "meel" =>["rollnumber"=>2,"Bmonth"=>"feb","year"=>2001],
    "jeel" =>["rollnumber"=>3,"Bmonth"=>"jan","year"=>2002],
];

echo "<pre>";
print_r($stu);
echo "</pre>";
?>