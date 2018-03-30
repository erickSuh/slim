<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
    require 'vendor/autoload.php';
    $app = new \Slim\App();
<<<<<<< HEAD
    $app->get('/', function($request, $response, $args)
    {
        
        switch($args['operador'])
=======
    $app->get('/calculadora/{v1}/{op}/{v2}', function($request, $response, $args)
    {
        $resp = 0;
        switch($args['op'])
>>>>>>> 7476d8745e8a689c91014d834f26311d200e98de
        {
            case "0":
            $resp = $args['v1'] + $args['v2'];
            break;

            case "1":
            $resp = $args['v1'] - $args['v2'];
            break;

            case "2":
            $resp = $args['v1'] * $args['v2'];
            break;

            case "3":
            $resp = $args['v1'] / $args['v2'];
            break;
        }
<<<<<<< HEAD
        $response->getBody()->write("Hello, $response");
        echo((string)$response);
        echo("texto");
=======
        $response = $response->withJson($resp);
        return $response;
>>>>>>> 7476d8745e8a689c91014d834f26311d200e98de
    });
    $app->run();
?>