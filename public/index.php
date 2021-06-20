<?php

use Mhoney\Infra\Repositories\Postgresql\DbRepository;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Mhoney\App\UseCases\ExportNewRecord\ExportNewRecord;
use Mhoney\App\UseCases\ExportNewRecord\InputBoundaryDTO;

require __DIR__ . "./../vendor/autoload.php";

$app = AppFactory::create();

$app->get("/", function (Request $request, Response $response) {
  $response->getBody()->write("How you dare write hello world in here");
  return $response;
});

// require __DIR__ . "./../src/routes.php";
$newRecordRepository = new DbRepository();
$newRecord = new ExportNewRecord($newRecordRepository);
$input = new InputBoundaryDTO(
  "Coffin",
  "5.20",
  "graveyard"
);
$newRecord->handler($input);

$app->run();
