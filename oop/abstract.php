<?php

abstract class main{
    public $name;
    function __construct($a = "No name "){
        $this->name = $a;
    }
    abstract protected function dis();
}

class sub extends main{

    public function dis(){
        echo "Name :" . $this->name;
    }
    
}

$obj = new sub("Neel");
$obj->dis();
?>