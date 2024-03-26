<?php

include_once "classes/Torneo.php";
include_once "classes/Partita.php";
include_once "classes/Squadra.php";
include_once "classes/SquadraMaschile.php";
include_once "classes/SquadraFemminile.php";

function createSquadre(){
    return [
        new SquadraMaschile("Signa", "Verde", 5, 20000),
        new SquadraMaschile("Lastra", "Blu", 5, 15000), 
        new SquadraMaschile("SanCasciano", "Rosso", 5, 20000),
        new SquadraMaschile("Galluzzo", "Giallo", 5, 25000),
        new SquadraFemminile("Isolotto", "Viola", 5, 10000),
        new SquadraFemminile("Spedaletto", "Arancione", 5, 5000),
        new SquadraFemminile("Raggiolo", "Bianco", 5, 30000),
        new SquadraFemminile("Impruneta", "Marrone", 5, 20000)
    ];
}

function createTornei(){
    $squadre = createSquadre();
    $maschili = [
        new Partita(1, $squadre[0], $squadre[1], 1, 2, true),
        new Partita(2, $squadre[2], $squadre[3], 0, 3, true),
        new Partita(3, $squadre[0], $squadre[2], 2, 0, true),
        new Partita(4, $squadre[1], $squadre[3], 1, 1, true)
    ];
    $femminili = [
        new Partita(1, $squadre[4], $squadre[5], 1, 2, true),
        new Partita(2, $squadre[6], $squadre[7], 0, 3, true),
        new Partita(3, $squadre[4], $squadre[6], 0, 0, false),
        new Partita(4, $squadre[5], $squadre[7], 0, 0, false)
    ];
    return [
        new Torneo(
            1,
            "Galluzzo",
            "10/12/2023",
            $maschili
        ),
        new Torneo(
            2,
            "Impruneta",
            "21/03/2024",
            $femminili
        )
    ];
}
