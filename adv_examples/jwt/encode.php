<?php
include'./vendor/autoload.php';
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

$key = 'example_key';
$payload = ['subject' => $_POST["Title"],];

$jwt = JWT::encode($payload, $key, 'HS256');
echo $jwt;
// print_r($jwt);

// $decoded = JWT::decode($jwt, new Key($key, 'HS256'));

// print_r($decoded);


// $decoded_array = (array) $decoded;

// JWT::$leeway = 60; // $leeway in seconds
// $decoded = JWT::decode($jwt, new Key($key, 'HS256'));
?>