<?php


use App\Endpoints\Flower;
use App\Endpoints\User;
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

$app->get('/user/{id}', function (Request $request, Response $response, $args) {
    $response->getBody()->write(User::getById($args['id']));
    return $response;
});
$app->get('/user', function (Request $request, Response $response, $args) {
    $response->getBody()->write(User::getAll());
    return $response;
});
$app->get('/flower/{id}', function (Request $request, Response $response, $args) {
    $response->getBody()->write(Flower::getById($args['id']));
    return $response;
});
$app->get('/flower', function (Request $request, Response $response, $args) {
    $response->getBody()->write(Flower::getAll());
    return $response;
});




try{
    $app->run();
}catch (Exception $e){
    echo ResponseManager::errorResponse($e->getMessage());
}
