<?php

function creerlieudit($comm)
{
    // pour Ã©viter le lieu dit avec le nom dans la gÃ©nÃ©ration de village
    $ListeNom = array("Avygael", "Taklin");
    $lieudit='';
    $Lieu='';
    $Adj='';
    $Qua='';
    $Nom='';

    if ($comm == 0) {
        $trand = rand(1, 100);
    } else {
        $trand = rand(1, 95);
    }

    switch ($trand) {
    case $trand<25:
    $Lieu = db_get_one_random_partial_value('LieuMas');
    $Adj = db_get_one_random_partial_value('AdjMas');
    $lieudit .= $Lieu.$Adj;
    break;
    case $trand>=25&&$trand<48:
    $Lieu = db_get_one_random_partial_value('LieuFem');
    $Adj = db_get_one_random_partial_value('AdjFem');
    $lieudit .= $Lieu.$Adj;
    break;
    case $trand>=48&&$trand<76:
    $Lieu = db_get_one_random_partial_value('QuaMas');
    $Adj = db_get_one_random_partial_value('QuaMas');
    $lieudit .= $Lieu.$Adj;
    break;
    case $trand>=76&&$trand<96:
    $Lieu = db_get_one_random_partial_value('QuaFem');
    $Adj = db_get_one_random_partial_value('QuaFem');
    $lieudit .= $Lieu.$Adj;
    break;
    case ($trand>=96):
    $lieudit .= 'Chez '.$ListeNom[rand(0, count($ListeNom)-1)];
    break;
  }
    return $lieudit;
}
