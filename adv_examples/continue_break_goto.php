<?php


for($x=1;$x<=5;$x++){
    for ($y=0;$y<$x;$y++){
        echo"*";        
    }
    echo "<br>";
}


echo  "<br>";
echo "continue (No:3 is missing)". "<br>";
for($a=1;$a<=10;$a++){
    if($a==3){
        continue;
    }
    echo "No:" . $a . "<br>";
}


echo  "<br>";
echo "break". "<br>";
for($a=1;$a<=10;$a++){
    if($a==3){
        break;
    }
    echo "No:" . $a . "<br>";
}


echo  "<br>";
echo "goto". "<br>";
for($a=1;$a<=10;$a++){
    if($a==3){
        goto abc;
    }
    echo "No:" . $a . "<br>";
}
echo "hello im here";
abc:
echo "you skipped lines from goto to the label";
?>