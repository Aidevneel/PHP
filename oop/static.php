<?php

class main{

    public static $name= "Neel";
    public static function show(){
        echo self::$name . " this is parent class static funtion self::function";
    }
}

echo main::$name . " calling static variable from outside of class class::variable";
echo "<br>";
main::show();

class b extends main{
    public function display(){
        echo  "<br>this is from derived class parent::variable " . parent::$name;
    }
}

$obj = new b();
$obj->display();

?>
