<?php
require_once 'verdor/autolod.php';

$app=new \Slim\Slim();
$app->get ("/hola/;nombre" ,  function ($nombre){
echo 'Hola',$nombre;   
});


$app->post('/books', function () {
    //Create book
});

$app->run();