<?php
echo "multidimensional array";
$emp = [
    [1,"amit",2005],
    [2,"amit",2805],
    [3,"hasmukh",2605],
    [4,"neel",2905],
];
echo "<br>";

echo "<pre>";
print_r($emp);
echo "</pre>";echo "<br>";

echo "for loop" . "<br>";
for($row = 0; $row < 4 ; $row++){
    for ($col = 0; $col < 4; $col++){
        echo $emp[$row][$col]. " ";
    }
    echo "<br>";
}

echo "<br>" ."for each". "<br>";
foreach($emp as $row){
    foreach($row as $col){
    echo $col . " ";
    }
    echo "<br>";
}

echo "<br>"."foreach as list()"."<br>";
foreach($emp as list($a,$b,$c)){
    echo "$a $b $c" ."<br>";
}

echo "<br>" . "multidimensional associative array ";
$stu = [
    "neel" =>["rollnumber"=>1,"Bmonth"=>"march","year"=>2005],
    "meel" =>["rollnumber"=>2,"Bmonth"=>"feb","year"=>2001],
    "jeel" =>["rollnumber"=>3,"Bmonth"=>"jan","year"=>2002],
];

echo "<pre>";
print_r($stu);
echo "</pre>";

echo "<br>array count emp:" . count($emp);
echo "<br>array count with internal array stu:" . count($stu,1);


echo "<br>";
echo "<br>array sizeof with internal array emp:" . sizeof($emp,1);
echo "<br>array sizeof stu:" . sizeof($stu);

echo "<br>array_replace_recursive will replace 2nd array value in 1st array and create new array : ";
$newarray= array_replace_recursive($emp,$stu);
echo "<pre>";
print_r($newarray);
echo "</pre>";






?>