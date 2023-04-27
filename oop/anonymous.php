<?php

$obj=new class{
   public function sayhello(){
      echo "Anonymous class dont have name, it used only one time and it works like normal class <br>";
   }
};

$obj->sayhello();

var_dump(get_class(new class() {} ));
echo "<br>";

class base{
    public function test1(){
       echo "test1 method in parent class <br> ";
    }
}
 interface interface1{
    public function test2();
}

 $obj=new class() extends base implements interface1{
    public function test2(){
       echo "implements test2 method from interface <br>";
    }
};
$obj->test1();
$obj->test2();


?>