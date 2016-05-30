<?php
require_once 'verdor/autolod.php';
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app=new \Slim\Slim();
$app->get ("/hola/;nombre" ,  function ($nombre){
echo 'Hola',$nombre;   
});

$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});

$app->run();
