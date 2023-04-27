<?php

namespace magic\constant;
trait newtrait{
    public function hello(){
        echo "TRAIT NAME IS : " . __TRAIT__;
    }
}

echo "LINE NUMBER : " . __LINE__ . "<br>";
echo "FULL PATH OF THIS FILE : " . __FILE__ . "<br>";
echo "FULL PATH OF THIS FOLDER : " . __DIR__ . "<br>";

function test(){
echo "FUNCTION NAME IS : " . __FUNCTION__ . "<br>";
}
test();

class abc{
    use newtrait;
    public function classmethod(){
        echo "CLASS NAME IS : " . __CLASS__ . "<br>";
        echo "METHOD NAME IS : " . __METHOD__ . "<br>";
    }
}

$obj = new abc();
$obj->classmethod();

echo "NAMESPACE NAME IS : " . __NAMESPACE__ . "<br>";
$obj->hello();

?>