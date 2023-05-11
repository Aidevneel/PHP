<?php

$title = $_POST["Title"] ;
$encrypted = $title;
$decode = base64_decode($encrypted);

echo $decode;


?>