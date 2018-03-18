<?php
    require 'vendor/autoload.php';
    $app = new \Slim\App();
    $app->get('/', function($request, $response, $args)
{
    echo 'Estou na home';
});
    $app->run();