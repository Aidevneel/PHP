<?php

class abc{

    private $a = 10;  // variables are called as properties

    private function test(){     //these are methods
        $this->a = 20;
        echo $this->a;
    }
    function __call($method, $args){
        if(method_exists($this , $method)){         //method_exists is use for check method is exists in class or not
            echo "you are accessing private method : " . $method . "<br>";
        }else{
            echo "you are accessing non-existing method : " . $method . "<br>";
        }
        
    }

}


$obj = new abc();

$obj->test();



?>