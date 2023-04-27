<?php

class abc{

    public $a = 10;
    public $b = 5;

    public function __invoke(){
        echo $this->a + $this->b;
    }
}

$obj = new abc();
$obj();             //now __invoke() method called automatically


?>