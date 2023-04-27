<?php 

trait testrait{}
interface test{}

class base{
    public $a;
    public $b = "hello";
    public $c = 2023;
    private $d = "neel";

    function __construct(){
        $this->c = 2020;
        print_r(get_class_vars(__CLASS__));
        echo "<br>";
    }

    static public function test(){
        echo "<br>";
        var_dump(get_called_class());
        
    }
}

class child extends base{
    public $nwe = 22;
}


$obj = new base();

echo "get_class_vars <br>";
print_r(get_class_vars(get_class($obj)));
echo "<br>";

echo "get_calss_methods functions list : <br>";
print_r(get_class_methods($obj));
echo "<br>";

$obj2 = new child();
echo "get_parent_class Parent class name is : <br>" . get_parent_class($obj2);
echo "<br>";

echo "get_object_vars<br>";
print_r(get_object_vars($obj));
echo "<br>";

echo "get_called_class for check for which class it is called<br>";
base::test();
child::test();
echo "<br>";

echo "get_declared_classes class list : <br>";
print_r(get_declared_classes());
echo "<br>";

echo "get_declared_interfaces interface list : <br>";
print_r(get_declared_interfaces());
echo "<br>";

echo "get_declared_traits Trait list : <br>";
print_r(get_declared_traits());
echo "<br>";


?> 