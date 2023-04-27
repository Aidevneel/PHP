<?php

class abc{
    public $a = 10;
    public $b = "commit";
    public $c = 2023;

    function __sleep(){             //it is called automatically when serialize method call
        return array('b');
    }
    function __wakeup(){             //it is called automatically when serialize method call
        echo "this is wakeup method automatically called when you call unserialize() method <br>";
    }
}

$obj = new abc();
$test = serialize($obj);  //__sleep() now called
$test2 = unserialize($test);
print_r($test);
echo "<br>";
print_r($test2);

?>