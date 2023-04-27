<?php

class person{

    public $name,$age;

    function __construct($n = "No name",$a = 0){
        $this->name = $n;
        $this->age = $a;
        echo "this is __construct function, it is called automatically when object is created <br>";
    }

    function show(){
        echo "this is show function  " . $this->name . ":" . $this->age . "<br>" ;
    }
    function __destruct(){
        echo "this is __destruct function, it is called automatically when object's work is done<br>";
    }

}

$obj = new person("Neel",22); // construct function will automatically called bcz object is created
$obj->show();

$obj2 = new person();
$obj2->show();


// destructor function will call automatically when object's all work is done.


?>