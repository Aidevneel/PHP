<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Models\Db;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Selective\BasePath\BasePathMiddleware;


$app = AppFactory::create();

$app->post('/add', function (Request $request, Response $response, array $args) {
 $data = $request->getParsedBody();
 $name = $data["name"];
 $email = $data["email"];
 $a = "success";
 $response->getBody()->write($a);
});
  
$app->get('/add', function (Request $request, Response $response, array $args) {
      $a = "success";
   $response->getBody()->write($a);
  });