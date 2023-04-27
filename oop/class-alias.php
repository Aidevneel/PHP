<?php

class myclass{
    public $a = 30;
}

class_alias("myclass","mc");

$obj = new mc();
echo $obj->a;

?>