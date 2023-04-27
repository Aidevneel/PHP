<?php

interface parent1{
    function hi($n);
}
interface parent2{
    function bye($m);
}

class child implements parent1, parent2{
    public function hi($n){
        echo "HI : ". $n;
    }
    public function bye($m){
        echo "Bye : ".$m;
    }

}

$test = new child();
$test->hi("neel");
echo "<br>";
$test->bye("meet");
?>
