<?php
    require 'vendor/autoload.php';
    $app = new \Slim\App();
    $app->get('/calculadora/{v1}/{op}/{v2}', function($request, $response, $args)
    {
        $resp = 0;
        switch($args['op'])
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
        $response = $response->withJson($resp);
        return $response;
    });
    $app->run();
?>