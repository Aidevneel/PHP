<?php

class main{
    public $name, $age;
    function __construct($a= "No name ", $b=0){
        $this->name = $a; 
        $this->age = $b;
    }
    function dis(){
        echo "This is main class";
    }
}

class sub extends main{

    function display(){
        echo "Name :" . $this->name . "<br>age :" . $this->age;
    }
    
}

$obj = new sub("Neel",22);
$obj->display();
$obj->dis();
?>