<?php

function test($a="First",$b="Last"){
    $c= "$a $b";
    return $c;
}

$name= test("neel","shah");
echo $name . "<br>";

$name= test("neel");
echo $name . "<br>";

$name= test("","shah");
echo $name . "<br>";

$name= test();
echo $name . "<br>";




echo "<br>";echo "<br>";

function refn($a){
    $a .= " it will not return value";
    return $a;
}
function ref(&$a){
    $a .= " & sign for address store of var";
    
}

$ab= "fun argument by reference";
refn($ab);
echo $ab . "<br>";

ref($ab);
echo $ab . "<br>";




echo "<br>";
echo "variable function / annonomus function". "<br>";
function same($a){
    echo "$a will given to variable value and function will be called as variable name";
}
$any = "same";
$any("same name of function ");

echo "<br>";echo "<br>";
echo "variable function / annonomus function". "<br>";
$helllo = function($a){
    echo "$a variable function, make sure to put semi colon at the end of curly breket";
};
$helllo("another way of ");


?>