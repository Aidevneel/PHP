<?php

class abc{
    public $a = 10;
    private $b = "magic";
    private $c = "method";

    function change(){
       echo $this->b ."<br>" . $this->c;
    }
    function __unset($property){        //this will automatically called when you try to unset private property outside of class
        unset($this->$property);
    }
}

$obj = new abc();
// unset($obj->a);     //it will destroy property
// echo $obj->a;

unset($obj->b);     
//$obj->change();
echo "<pre>";
print_r($obj);
echo "</pre>";




?>