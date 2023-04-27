<?php

include 'namespace1.php';
include 'namespace2.php';

use first\v1\test\command as first;

$obj1 = new first\student();
$obj1->wow();

echo "<br>";
$obj2 = new second\student();
$obj2->wow();


?>