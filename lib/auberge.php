<?php

function creerauberge(){
  // Nom Feminin singulier
  $CreFemCon = db_get_one_random_partial_value("CreFemCon");
  $CreFemVoy = db_get_one_random_partial_value("CreFemVoy");
  // Adjectif Feminin singulier
  $AdjFemCre = db_get_one_random_partial_value("AdjFemCre");
  // Nom Masculin Singulier
  $ObjFemCon = db_get_one_random_partial_value("ObjFemCon");

  // Adjectif Masculin Singulier
  $AdjFemObj = db_get_one_random_partial_value("AdjFemObj");

  // Nom Feminin singulier
  $CreMasCon = db_get_one_random_partial_value("CreMasCon");
  $CreMasVoy = db_get_one_random_partial_value("CreMasVoy");
  // Adjectif Feminin singulier
  $AdjMasCre = db_get_one_random_partial_value("AdjMasCre");
  // Nom Masculin Singulier
  $ObjMasCon = db_get_one_random_partial_value("ObjMasCon");
  // Adjectif Masculin Singulier
  $AdjMasObj = db_get_one_random_partial_value("AdjMasObj");

  //QuaNum    Aux
  $QuaNum = db_get_one_random_partial_value("QuaNum");

  //Personnage
  $Perso = db_get_one_random_partial_value("Perso");

  //lieu
  $LieFemCon = db_get_one_random_partial_value("LieFemCon");
  $LieMasCon = db_get_one_random_partial_value("LieMasCon");

  //quineu
  $QuiNeu = db_get_one_random_partial_value("QuiNeu");
  // du
  $du = db_get_one_random_partial_value("du");

  $d = db_get_one_random_partial_value("d");
  $des = db_get_one_random_partial_value("des");
  $dela = db_get_one_random_partial_value("dela");

  $auberge = '';

  switch (rand(1,19)) {
    case 1;
    $auberge.='A la ' . $CreFemCon.' ' . $AdjFemCre;
    break;
    case 2;
    $auberge.='A la ' . $ObjFemCon.' ' . $AdjFemObj;
    break;
    case 3;
    $auberge.='La ' . $CreFemCon.' ' . $AdjFemCre;
    break;
    case 4;
    $auberge.='Au ' . $ObjMasCon.' ' . $AdjMasObj;
    break;
    case 5;
    $auberge.='Le ' . $ObjMasCon.' et le ' . $ObjMasCon;
    break;
    case 6;
    $auberge.='La ' . $CreFemCon.' et le ' . $ObjMasCon;
    break;
    case 7;
    $auberge.='Le ' . $ObjMasCon.' et la ' . $CreFemCon;
    break;
    case 8;
    $auberge.='La ' . $CreFemCon.' et la ' . $CreFemCon;
    break;
    case 9;
    $auberge.='Aux ' . $QuaNum.' ';
    switch (rand(0,3)) {
      case 0;
      $auberge.=$CreFemCon;
      break;
      case 1;
      $auberge.=$ObjMasCon;
      break;
      case 2;
      $auberge.=$ObjFemCon;
      break;
      case 3;
      $auberge.=$CreMasCon;
      break;
    }
    if (substr($auberge, -2) == "au")
    $auberge .= 'x';
    else
    $auberge .= 's';
    break;
    case 10;
    $auberge .= 'Au ' . $ObjMasCon . ' ' . $AdjMasObj;
    break;
    case 11;
    $auberge .= 'A l\'' . $CreFemVoy . ' ' . $AdjFemCre;
    break;
    case 12;
    $auberge .= 'A l\'' . $CreMasVoy . ' ' . $AdjMasCre;
    break;
    case 13;
    $auberge .= 'Chez ' . $Perso;
    break;
    case 14;
    $auberge .= 'A la ' . $LieFemCon.' du ' . $CreMasCon;
    break;
    case 15;
    $auberge .= 'A la ' . $LieFemCon . ' de la ' . $CreFemCon . ' ' . $AdjFemCre;
    break;
    case 16;
    $auberge .= 'Au ' . $LieMasCon;
    switch (rand(0,3)) {
      case 0;
      $auberge .= ' du ' . $du;
      break;
      case 1;
      $auberge .= ' d\'' . $d;
      break;
      case 2;
      $auberge .= ' des ' . $des;
      break;
      case 3;
      $auberge .= ' de la ' . $dela;
      break;
    }
    break;
    case 17;
    $auberge .= 'Au ' . $LieMasCon . ' de la ' . $CreFemCon . ' ' . $AdjFemCre;
    break;
    case 18;
    $auberge .= 'A la ' . $CreFemCon . ' qui ' . $QuiNeu;
    break;
    case 19;
    $auberge .= 'Au ' . $CreMasCon . ' qui ' . $QuiNeu;
    break;
  }
  return $auberge;
}

?>
