<?php
    require 'vendor/autoload.php';
    $app = new \Slim\App();
    $app->get('/calculadora/{valor1}{operador}{valor2}', function($request, $response, $args)
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
        return $response;
    });
    $app->run();