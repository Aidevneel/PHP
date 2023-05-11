<?php
include'./vendor/autoload.php';
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

$key = 'example_key';
$jwt = $_POST["Title"];

$decoded = JWT::decode($jwt, new Key($key, 'HS256'));

foreach ($decoded as $value) {
    echo "Decode = ".$value, "\n";

}
?>

