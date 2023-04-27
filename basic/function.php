<?php

declare (strict_types=0);


function math(int $a ,float $b=17.55): int{
    return $a + $b;
}

echo math(55,10.56). "<br>";

echo math(55);
?>