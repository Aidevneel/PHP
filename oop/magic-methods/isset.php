<?php

class abc{

    private $a = 10;
    public $ab = 120;

    function __isset($property){
        echo isset($this->$property);
    }
}

$obj = new abc();
echo isset($obj->a);



?>