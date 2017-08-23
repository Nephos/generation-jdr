<?php

function appeldirigeant($dirigeant, $nbrdirigeant, $typevillenum)
{
    include_once('nomevolue.php');

    $typedirigeanttradisolo = db_get_one_random_partial_value("typedirigeanttradisolo");
    $typedirigeanttradimulti = db_get_one_random_partial_value("typedirigeanttradimulti");
    $typedirigeantinhabsolo = db_get_one_random_partial_value("typedirigeantinhabsolo");
    $typedirigeantinhabmulti = db_get_one_random_partial_value("typedirigeantinhabmulti");
    $typedirigeantinmagsolo = db_get_one_random_partial_value("typedirigeantinmagsolo");
    $typedirigeantinmagmulti = db_get_one_random_partial_value("typedirigeantinmagmulti");
    $monstrueux = db_get_one_random_partial_value("monstrueux");
    $pasorkpasgob = array(1,3,4,6,7,8);

    $sortie='';
    $sortie.='<br><h4>Dirigeant(s)</h4>';
    $sortie.='La ville est dirigée  par ';
    if ($dirigeant <= 13) {
        if ($nbrdirigeant == 1) {
            if (rand(1, 100)>5) {
                $sortie.=$typedirigeanttradisolo;
                if ($typevillenum==0) {
                    $sortie.=' portant le nom de '.creernomevo(7, rand(0, 1));
                } elseif ($typevillenum==1) {
                    $sortie.=' portant le nom de '.creernomevo($pasorkpasgob[rand(0, 6)], rand(0, 1)).'.';
                } else {
                    $sortie.=' portant le nom de '.creernomevo(rand(1, 8), rand(0, 1));
                }
            } else {
                $sortie.=$typedirigeanttradisolo. ' mais qui est en réalité ';
                if (rand(1, 100)>5) {
                    $sortie.=$typedirigeanttradimulti;
                } else {
                    $sortie.=$typedirigeanttradimulti. ' rajouter monstrueux';
                }
            }
        }
    } elseif ($dirigeant<=18) {
        if ($nbrdirigeant==1) {
            $sortie.=$typedirigeanttradisolo.' mais lui-même à la solde d\'';
            if (rand(0, 1)==0) {
                $sortie.=$typedirigeantinhabsolo;
                if (rand(0, 1)==0) {
                    $sortie.=" et ce, contre son gré.";
                } else {
                    $sortie.=" en retour d'un confort financier.";
                }
            } else {
                $sortie.=$typedirigeantinhabmulti;
            }
        } else {
            $sortie.=$typedirigeanttradimulti.' mais lui-même à la solde d\'';
            if (rand(0, 1)==0) {
                $sortie.=$typedirigeantinhabsolo;
            } else {
                $sortie.=$typedirigeantinhabmulti;
            }
        }
    } elseif (rand(0, 1)==0) {
        $sortie.=$typedirigeantinmagsolo;
        if ($typevillenum==0) {
            $sortie.=' portant le nom de '.creernomevo(7, rand(0, 1));
        } elseif ($typevillenum==1) {
            $sortie.=' portant le nom de '.creernomevo($pasorkpasgob[rand(0, 6)], rand(0, 1)).'.';
        } else {
            $sortie.=' portant le nom de '.creernomevo(rand(1, 8), rand(0, 1));
        }
    } else {
        $sortie.=$typedirigeantinmagmulti;
    }

    return $sortie;
}
