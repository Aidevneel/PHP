<?php

$age = 20;

if(!($age <= 18)){
    echo "NOT Operator";
}


if($age <= 25 and $age >= 10  ){
    echo "<br>"." AND Operator";
}
if($age <= 25 or $age >= 26  ){
    echo "<br>"."OR Operator";
}

?>