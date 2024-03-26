<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

class IndexController{
    function index(Request $request, Response $response, $args){
        $response->getBody()->write(
            "Percorsi disponibili:<br>
            /torneo<br>
            /torneo/{codice}<br>
            /torneo/{codice}/partite<br>
            /torneo/{codice}/partite/disputate<br>
            /torneo/{codice}/partite/da_disputare<br>
            /torneo/{codice}/partite/{id}<br>
            /torneo/{codice}/concluso<br>
            /torneo/{codice}/classifica<br>
            /squadre<br>
            /squadre/{nome}"
        );
        return $response;
    }
}