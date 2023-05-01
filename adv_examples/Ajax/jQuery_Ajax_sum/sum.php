<?php

if(json_decode(file_get_contents("php://input"),true)){
$data = json_decode(file_get_contents("php://input"),true);

$a = $data['a'];
$b = $data['b'];
echo json_encode( $a + $b);
}else{


if(($_POST["a"] and $_POST["b"]) and !((strlen($_POST["a"]) == 0 and strlen($_POST["b"]) == 0)) and (settype($_POST["a"],"integer") and settype($_POST["b"],"integer"))){
    if($_POST["a"] == 0 or $_POST["b"] == 0){
            echo "Enter numeric value";
        }else{
            $a = $_POST["a"];
            $b = $_POST["b"];
            $c = $a + $b;
            echo $c;
        }
    }else if(strlen($_POST["a"]) == 0 and strlen($_POST["b"]) == 0){
        echo "Enter value";   
    }else{
        echo "Enter both value and it should be numeric";
}
}
?>