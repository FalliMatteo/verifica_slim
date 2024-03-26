<?php

use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

include_once "controllers/IndexController.php";
include_once "controllers/SquadreController.php";
include_once "controllers/TorneoController.php";
include_once "controllers/ApiController.php";

$app = AppFactory::create();

$app->get('/', "IndexController:index");
$app->get('/torneo', "TorneoController:index");
$app->get('/torneo/{codice}', "TorneoController:getTorneo");
$app->get('/torneo/{codice}/partite', "TorneoController:getPartite");
$app->get('/torneo/{codice}/partite/disputate', "TorneoController:getPartiteDisputate");
$app->get('/torneo/{codice}/partite/da_disputare', "TorneoController:getPartiteDaDisputare");
$app->get('/torneo/{codice}/partite/{id}', "TorneoController:getPartita");
$app->get('/torneo/{codice}/concluso', "TorneoController:isConcluso");
$app->get('/torneo/{codice}/classifica', "TorneoController:getClassifica");
$app->get('/squadre', "SquadreController:index");
$app->get('/squadre/{nome}', "SquadreController:getSquadra");

$app->run();