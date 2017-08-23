<?php
function creeraventurier($lvl, $typevillenum)
{
    include_once('nomevolue.php');
    $hero = '';
    $pasgob = array(1,2,3,4,6,7,8);
    $pasorkpasgob = array(1,3,4,6,7,8);
    $pashumain = array(1,3,4,6,8);
    $ex = rand(1, 9);
    $exbis = rand(1, 9);
    $raceisole = array(7,7,7,7,7,7,7,7,$exbis,$ex);
    $ex2 = $pashumain[rand(0, count($pashumain)-1)];
    $ex3 = $pashumain[rand(0, count($pashumain)-1)];
    $ex4 = $pashumain[rand(0, count($pashumain)-1)];

    $raceouvert = array(7, 7, 7, 7, 7, $ex2, $ex2, $ex3, $ex4, $ex);
    $race = array();

    switch ($typevillenum) {
        case 0:
        $race = $raceisole;
        break;
        case 1:
        $race = $raceouvert;
        break;
        case 2:
        $race = $pasorkpasgob;
        break;
        case 3:
        break;
    }

    if (rand(0, 9) < 7) {
        $tendance='bienveillante';
    } else {
        $tendance='malveillante';
    }
    $sexe = rand(1, 2);
    $listeutile = array();

    $typedeherosmas = db_get_one_random_partial_value("typedeherosmas");
    $typedeherosfem = db_get_one_random_partial_value("typedeherosfem");

    if ($sexe == 1) {
        $utile = $typedeherosmas;
    } else {
        $utile = $typedeherosfem;
    }

    $hero = creernomevo($race[rand(0, 6)], $sexe) . ' ' . $utile . ' de niveau ' . $lvl . ' de tendance ' . $tendance;

    return $hero;
}
