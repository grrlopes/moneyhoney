<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . "./../vendor/autoload.php";

$app = AppFactory::create();

$app->get("/", function (Request $request, Response $response) {
  $response->getBody()->write("How you dare write hello world in here");
  return $response;
});

require __DIR__ . "./../src/routes.php";

$app->run();
