<?php

$he = 'Bob';
$she = 'Alice';

$text = "$he said, \"PHP is awesome\"";

echo  $text. "<br>";


$str = <<<neel_heredoc
place a string here,
it is heredoc,
this is variable $he and $she
neel_heredoc;

echo $str . "<br>";

$str = <<<'neel_nowdoc'
place a string here,
it is nowdoc,
this is variable $he and $she
neel_nowdoc;

echo $str;


?>