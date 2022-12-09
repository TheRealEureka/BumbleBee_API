<?php


use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

\App\Utility\ConnectionFactory::setConfig(__DIR__ . '/../conf/dbconf.ini');

$app = AppFactory::create();


$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("<img src='https://media.tenor.com/tHLGe49Kf1EAAAAd/oh-blow-fish.gif' alt='aled'>");
    return $response;
});




try{
    $app->run();
}catch (Exception $e){
    echo $e->getMessage();
}
