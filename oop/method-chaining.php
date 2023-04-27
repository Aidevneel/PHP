<?php

class calc{

    public $a, $b, $c;

    function first(){
        echo "this is first function <br>";
        return $this;
    }
    function second(){
        echo "this is second function <br>";
        return $this;
    }
    function third(){
        echo "this is third function <br>";
    }
}

$obj = new calc();
$obj->first()->second()->third();
?>