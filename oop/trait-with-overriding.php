<?php

trait test{
    public function hello(){
        echo "<br>trait hello";
    }
}

class a{
    public function hello(){
        echo "class a hello";
    }
}

class b extends a{
    use test;
    public function hello(){
        echo "class b hello";
    }
}

$obj = new b();
$obj->hello();

echo "<br>";
/********************************************************************** */

trait experiment{
    public function hello(){
        echo " experiment trait  hello insteadof test trait hello funtion";
    }
    private function pvt(){
        echo "this is private function";
    }
}

class traitoverriding{
    use test, experiment {
        experiment::hello insteadof test;   //because we have same function in two traits, use experiment trait hello function intead of test trait
        test::hello as newhello;            //renamed hello fumction of test trait as new hello
        experiment::pvt as public;             //making private function to public
    }
}

$obj = new traitoverriding();
$obj->hello();
$obj->newhello();                           //calling hello function of test trait which is renamed as newhello
$obj->pvt(); 

?>