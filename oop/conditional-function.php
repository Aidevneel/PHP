<?php
trait newtrait{
    function tt(){
        echo "this is trait";
    }
}
interface abc{
    function inew();
}
class conditional{
    function math(){
        echo "this is math function";
    }
}
class child extends conditional{
    public $a= "Neel";
}

$obj = new child();

if(class_exists('conditional')){
    echo "class exist<br>";
}else{
    echo "class not exist<br>";
}

if(interface_exists('abc')){
    echo "Interface exist<br>";
}else{
    echo "interface not exist<br>";
}

if(method_exists($obj , "math")){
    echo "method exist<br>";
}else{
    echo "method not exist<br>";
}

if(property_exists($obj,"a")){
    echo "property exist<br>";
}else{
    echo "property not exist<br>";
}

if(trait_exists('newtrait')){
    echo "trait exist<br>";
}else{
    echo "trait not exist<br>";
}

if(is_a($obj, "child")){
    echo "object of class exist<br>";
}else{
    echo "object of class not exist<br>";
}

if(is_subclass_of($obj, "conditional")){
    echo "object of subclass of parent class exist<br>";
}else{
    echo "object of subclass of parent class exist<br>";
}


?>