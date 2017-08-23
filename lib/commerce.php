<?php
function creercommerce($type, $particu, $typevillenum, $taille)
{
    /*
    * race
    * 1 = Demi-elfe
    * 2 = Demi-orque
    * 3 = Elfe
    * 4 = Gnome
    * 5 = Gobelin
    * 6 = Halfelins
    * 7 = Humain
    * 8 = Nain
    * 9 = Drow
    */

    include_once('auberge.php');
    include_once('nomevolue.php');
    include_once('lieudit.php');
    $sortie = '';
    $pasgob = array(1,2,3,4,6,7,8);
    $pasorkpasgob = array(1,3,4,6,7,8);
    $pashumain = array(1,3,4,6,8);
    $ex = rand(1, 9);
    $exbis = rand(1, 9);
    $raceisole = array(7, 7, 7, 7, 7, 7, 7, 7, $exbis, $ex);
    $ex2 = $pashumain[rand(0, count($pashumain)-1)];
    $ex3 = $pashumain[rand(0, count($pashumain)-1)];
    $ex4 = $pashumain[rand(0, count($pashumain)-1)];

    $raceouvert = array(7, 7, 7, 7, 7, $ex2, $ex2, $ex3, $ex4, $ex);

    $race = array();
    $hommedupeuple = db_get_one_random_partial_value("hommedupeuple");
    $adepte = db_get_one_random_partial_value("adepte");
    $expert = db_get_one_random_partial_value("expert");
    $commerce = db_get_one_random_partial_value("commerce");
    $commercemarin = db_get_one_random_partial_value("commercemarin");
    $titrenoblessefemfull = db_get_one_random_partial_value("titrenoblessefemfull");
    $titrenoblessemasfull = db_get_one_random_partial_value("titrenoblessemasfull");
    $noblessemas = db_get_one_random_partial_value("noblessemas");
    $noblessefem = db_get_one_random_partial_value("noblessefem");

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


    if ($particu == 1) {
        if (rand(1, 2) == 1) {
            $expert = db_get_one_random_partial_value("expertmarin");
        }
        if (rand(1, 2) == 1) {
            $commerce = db_get_one_random_partial_value("commercemarin");
        }
    }

    if ($taille <= 3) {
        $titrenoblessemasfaible = db_get_one_random_partial_value("titrenoblessemasfaible");
        $titrenoblessefemfaible = db_get_one_random_partial_value("titrenoblessefemfaible");
        $noblessemas = $titrenoblessemasfaible;
        $noblessefem = $titrenoblessefemfaible;
    } else {
        $noblessemas = $titrenoblessemasfull;
        $noblessefem = $titrenoblessefemfull;
    }

    switch ($type) {
        case 1:
        if (rand(1, 100) > 50) {
            $nom = creerauberge();
            $sortie = 'Une auberge portant le nom : ' . $nom . '<a href="index.php?page=aubergedetail&nom=' . urlencode($nom) . '" target="_blank"><i> Détail</i></a>';
            ;
            compteur('auberge');
        } else {
            $sortie = $commerce . ' tenu par ' . creernomevo($race[rand(0, 6)], rand(1, 2));
        }
        break;
        case 2:
        $sortie = $expert . ' du nom de ' . creernomevo($race[rand(0, 6)], rand(1, 2));
        break;
        case 3:
        $sortie = $adepte . ' du nom de ' . creernomevo($race[rand(0, 6)], rand(1, 2));
        break;
        case 4:
        $sexe = rand(1, 2);
        if ($sexe == 1) {
            $sortie = creernomevo($race[rand(0, 5)], $sexe) . ' ' . $noblessemas[rand(0, count($noblessemas)-1)] . ' de ' .creerlieudit(1);
        } else {
            $sortie = creernomevo($race[rand(0, 5)], $sexe) . ' ' . $noblessefem[rand(0, count($noblessefem)-1)] . ' de ' .creerlieudit(1);
        }
        break;
    }

    return $sortie;
}
