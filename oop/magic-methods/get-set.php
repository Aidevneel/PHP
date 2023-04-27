<?php

class abc{

    private $a = 10;  // variables are called as properties

    public function test(){     //these are methods
        echo $this->a;
    }
    function __get($n){
        if(property_exists($this , $n)){        //property_exists is use for check method is exists in class or not
            echo "you are accessing private property : " . $n . "<br>";
        }else{
            echo "you are accessing non-existing property : " . $n . "<br>";
        }
        
    }

    function __set($property, $value){
        if(property_exists($this , $property)){
            $this->$property = $value;
        }else{
            echo "this is __set, you are accessing non-exist property : " . $property . "<br>";
        }
    }


}


$obj = new abc();

$obj->a;
$obj->test();




?>