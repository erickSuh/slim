<?php
    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;

    require 'pacote/config/connection.php';

    function calcular(Request $request, Response $response, array $args)
    {
        $calculo = json_decode($request->getBody());
        
    }
?>
