<?php

final class old{        //prevent inheritance

}

// class latest extends old{       //this throws error bcz, final class can not be inherited
// }

class ab{
    final function print(){
        echo "privent overriding <br>";
    }
    function display(){
        echo "final method will privent overriding";
    }
}

class xy extends ab{
    // function print(){
    //     echo "privent ---  overriding";
    // }
    function display(){
        echo "final method will privent overriding, final calss will prevent inheritance";
    }
}

$obj = new xy();
$obj->print();
$obj->display();



?>