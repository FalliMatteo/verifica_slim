<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

include_once "createObjects.php";

class SquadreController{
    
    
    function index(Request $request, Response $response, $args){
        $squadre = createSquadre();
        $response->getBody()->write(json_encode($squadre));
        return $response->withHeader("Content-Type","application/json");
    }
    
    function getSquadra(Request $request, Response $response, $args){
        $squadre = createSquadre();
        $squadra = null;
        foreach($squadre as $s){
            if($s->getNome() === $args["nome"]){
                $squadra = $s;
            }
        }
        if($squadra === null){
            $response->getBody()->write("Squadra inesistente");
            return $response;
        }else{
            $response->getBody()->write(json_encode($squadra));
            return $response->withHeader("Content-Type","application/json");
        }
    }
}