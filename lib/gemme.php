<?php
function creergemme($val)
{
    $gemmetype1 = db_get_one_random_partial_value("gemmetype1");
    $gemmetype2 = db_get_one_random_partial_value("gemmetype2");
    $gemmetype3 = db_get_one_random_partial_value("gemmetype3");
    $gemmetype4 = db_get_one_random_partial_value("gemmetype4");
    $gemmetype5 = db_get_one_random_partial_value("gemmetype5");
    $gemmetype6 = db_get_one_random_partial_value("gemmetype6");

    $gemme = array();

    switch ($val) {
        case 0:
        $valeurDe =rand(1, 100);
        break;
        case 1:
        $valeurDe =rand(1, 25);
        break;
        case 2:
        $valeurDe =rand(26, 70);
        break;
        case 3:
        $valeurDe =rand(71, 99);
        break;
        case 4:
        $valeurDe =100;
        break;
    }

    switch ($valeurDe) {
        case $valeurDe<=25:
        $gemme[0] = $gemmetype1;
        $gemme[1] = rand(4, 16);
        break;
        case $valeurDe>25&&$valeurDe<=50:
        $gemme[0] = $gemmetype2;
        $gemme[1] = rand(2, 8) * 10;
        break;
        case $valeurDe>=51&&$valeurDe<=70:
        $gemme[0] = $gemmetype3;
        $gemme[1] = rand(4, 16) * 10;
        break;
        case $valeurDe>=71&&$valeurDe<=90:
        $gemme[0] = $gemmetype4;
        $gemme[1] = rand(2, 8) * 10;
        break;
        case $valeurDe>=91&&$valeurDe<=99:
        $gemme[0] = $gemmetype5;
        $gemme[1] = rand(4, 16) * 10;
        break;
        case $valeurDe==100:
        $gemme[0] = $gemmetype6;
        $gemme[1] = rand(2, 8) * 10;
        break;
    }

    return $gemme;
}
