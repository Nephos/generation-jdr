<?php

function appeleconomie($economie, $nomduvillage, $particu, $Capfi)
{
    $listeexportfaible = db_get_random_partial_values("listeexportfaible");
    $listeexportmoyen = db_get_random_partial_values("listeexportmoyen");
    $listeexportfort = db_get_random_partial_values("listeexportfort");
    $listeexportmaritimefull = db_get_random_partial_values("listeexportmaritimefull");
    $listeexportmaritimefaible = db_get_random_partial_values("listeexportmaritimefaible");
    $listeutile=array();

    $enplus = "";
    $sortie = "";
    $sortie .= "<br><br><h4>Economie</h4>";
    $sortie .= "L'économie de " . $nomduvillage . " est ";
    if ($economie<=10) {
        $sortie .= "faible";
        $listeutile=$listeexportfaible;
        if ($particu==1) {
            array_merge($listeutile, $listeexportmaritimefaible);
        }
        $enplus="malgré tout ";
    } elseif ($economie<=15) {
        $sortie .= "moyenne";
        $listeutile=$listeexportmoyen;
        if ($particu==1) {
            array_merge($listeutile, $listeexportmaritimefull);
        }
    } else {
        $sortie .= "elevée";
        $listeutile=$listeexportfort;
        if ($particu==1) {
            array_merge($listeutile, $listeexportmaritimefull);
        }
    }
    $sortie .= ", avec un capital global de " . $Capfi . " PO";
    $sortie .= "<br>On retrouve " . $enplus . "les denrées suivantes à l'exportation :";
    $sortie .= "<ul>";
    for ($i=0;$i<$economie;$i++) {
        $element =$listeutile[rand(0, count($listeutile)-1)];
        unset($listeutile[array_search($element, $listeutile)]);
        $listeutile = array_values($listeutile);
        $sortie .= "<li>" . $element . "</li>";
    }
    if ($particu==1) {
        if ($economie<10) {
            $sortie .= "<li>" . $listeexportmaritimefaible[rand(0, count($listeexportmaritimefaible)-1)] . "</li>";
        } else {
            $sortie .= "<li>" . $listeexportmaritimefull[rand(0, count($listeexportmaritimefull)-1)] . "</li>";
        }
    }
    $sortie .= "</ul>";

    return $sortie;
}
