<?php


use App\Utility\ConnectionFactory;
use App\Utility\ResponseManager;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

ConnectionFactory::setConfig(__DIR__ . '/../conf/dbconf.ini');

$app = AppFactory::create();


$app->get('/', function (Request $request, Response $response) {
    $response->getBody()->write(ResponseManager::successResponse("API is running"));
    return $response;
});
$app->get('/test', function (Request $request, Response $response) {
    $response->getBody()->write(ResponseManager::successResponse("API is running, test is ok"));
    return $response;
});




try{
    $app->run();
}catch (Exception $e){
    echo $e->getMessage();
}
