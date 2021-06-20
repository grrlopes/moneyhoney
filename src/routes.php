<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get("/test", function (Request $request, Response $response) {
  $response->getBody()->write("I don't know what i could write here");
  return $response;
});

$app->get("/{id}", function (Request $request, Response $response, array $args) {
  $response->getBody()->write("I don't know what i could write here");
  return $response;
});
