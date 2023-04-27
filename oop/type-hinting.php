<?php

class a{

    public function tets(array $n){         //only array will be accepted
    print_r($n);
    }
}

$obj = new a();
$a = ["neel","meet","jeet"];
$obj->tets($a);

echo "<br>";

class school{
    public function getnames(student $n){   //only student class obj will be accpted
        foreach($n->names() as $name){
            echo $name . "<br>";
        }
    }
}

class student{
    public function names(){
        return ["Ram","Krishna","Gopal"];
    }
}

$stu = new student();
$sch = new school();

$sch->getnames($stu);


?>