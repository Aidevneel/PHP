<?php

class calc{

    public $a, $b, $c;

    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

$obj = new calc();

$obj->a=20;
$obj->b=10;

$obj2 = new calc();

$obj2->a=40;
$obj2->b=30;

echo "sum " . $obj->sum() . "<br>";

echo "sub " . $obj2->sub();


?>