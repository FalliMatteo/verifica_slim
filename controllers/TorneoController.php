<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

include_once "createObjects.php";

class TorneoController{
    function searchTorneo($codice){
        $tornei = createTornei();
        foreach($tornei as $torneo){
            if($torneo->getCodice() == $codice){
                return $torneo;
            }
        }
        return null;
    }

    function index(Request $request, Response $response, $args){
        $tornei = createTornei();
        $response->getBody()->write(json_encode($tornei));
        return $response->withHeader("Content-Type","application/json");
    }
    
    function getTorneo(Request $request, Response $response, $args){
        $torneo = $this::searchTorneo($args["codice"]);
        if($torneo === null){
            $response->getBody()->write("Torneo inesistente");
            return $response;
        }else{
            $response->getBody()->write(json_encode($torneo));
            return $response->withHeader("Content-Type","application/json");
        }
    }

    function getPartite(Request $request, Response $response, $args){
        $torneo = $this::searchTorneo($args["codice"]);
        if($torneo === null){
            $response->getBody()->write("Torneo inesistente");
            return $response;
        }else{
            $partite = $torneo::getPartite();
            $response->getBody()->write(json_encode($partite));
            return $response->withHeader("Content-Type","application/json");
        }
    }

    function getPartita(Request $request, Response $response, $args){
        $torneo = $this::searchTorneo($args["codice"]);
        if($torneo === null){
            $response->getBody()->write("Torneo inesistente");
            return $response;
        }else{
            $partita = $torneo::getPartita($args["id"]);
            if($partita === null){
                $response->getBody()->write("Partita inesistente");
                return $response;
            }else{
                $response->getBody()->write(json_encode($partita));
                return $response->withHeader("Content-Type","application/json");
            }
        }
    }
}