<?php

use LDAP\Result;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$a = "NEEL";

$app = AppFactory::create();

$app->post('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world post!");
    return $response;
});

$app->run();