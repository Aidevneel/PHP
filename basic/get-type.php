<?php
$a = 3;
echo gettype($a) . "<br>";

$b = 3.2;
echo gettype($b) . "<br>";

$c = "Hello";
echo gettype($c) . "<br>";

$d = array();
echo gettype($d) . "<br>";

$e = array("red", "green", "blue");
echo gettype($e) . "<br>";

$f = NULL;
echo gettype($f) . "<br>";

$g = false;
echo gettype($g) . "<br>";
echo "<br>";
echo get_debug_type(null) . "<br>";
echo get_debug_type(true) . "<br>";
echo get_debug_type(1) . "<br>";
echo get_debug_type(0.1) . "<br>";
echo get_debug_type("foo") . "<br>";
echo get_debug_type([]) . "<br>";

$fp = fopen(__FILE__, 'rb');
echo get_debug_type($fp) . "<br>";

fclose($fp);
echo get_debug_type($fp) . "<br>";

echo get_debug_type(new stdClass) . "<br>";
echo get_debug_type(new class {}) . "<br>";
?>
