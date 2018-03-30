<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
    require 'vendor/autoload.php';
    $app = new \Slim\App();
    $app->get('/', function($request, $response, $args)
    {
        
        switch($args['operador'])
        {
            case "*":
            $response -> $args['valor1'] * $args['valor2'];
            break;

            case "+":
            $response -> $args['valor1'] + $args['valor2'];
            break;

            case "/":
            $response -> $args['valor1'] / $args['valor2'];
            break;

            case "-":
            $response -> $args['valor1'] - $args['valor2'];
            break;
        }
        $response->getBody()->write("Hello, $response");
        echo((string)$response);
        echo("texto");
    });
    $app->run();