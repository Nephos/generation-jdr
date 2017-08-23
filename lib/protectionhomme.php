<?php

function appelprotectionhomme($nbrhommearme, $nbrheros, $nbraventuriers)
{
    $colonel=0;
    $armee=$nbrhommearme;
    $sortie='';

    $sortie.='<br><h4>Protection en hommes</h4>';
    $sortie.='On retrouve �galement quelques '.$nbrhommearme.' hommes d\'arme, form�s ';

    if ($nbrhommearme<50) {
        $sortie.='de quelques villageois maniant maladroitement �p�e et arc...<br>';
    } elseif ($nbrhommearme<100) {
        if (rand(0, 1)==1) {
            $sortie.='d\'hommes qui suivent un entra�nement sporadique.<br>';
        } else {
            $sortie.='d\'une milice mal organis�e.<br>';
        }
    } elseif ($nbrhommearme<250) {
        if (rand(0, 1)==1) {
            $sortie.='d\'hommes correctement arm�s avec un entra�nement hebdomadaire.<br>';
        } else {
            $sortie.='d\'une milice organis�e avant une hi�rarchie.<br>';
        }
    } elseif ($nbrhommearme<999) {
        $sortie.='d\'hommes correctement arm�s avec un entra�nement quasi quotidien, ils poss�dent certaines sp�cialisations (arc, �p�es, pique,...).<br>';
    } elseif ($nbrhommearme>=1000) {
        $sortie.='en une arm�e digne de ce nom avec, � sa t�te, un g�n�ral d\'arm�e<br>';
        $nbrhommearme=$nbrhommearme-1;
    }
    $temp=501;
    while ($temp<$nbrhommearme) {
        $colonel++;
        $nbrhommearme--;
        $temp=$temp+501;
    }
    if ($colonel>=1) {
        $sortie.='Ces hommes comprenent : <br>- '.$colonel.' colonel';
        if ($colonel>1) {
            $sortie.='s';
        }
        $sortie.=' d\'arm�e ayec 5 lieutenants sous leurs ordres directs<br>';

        $lieutenant=$colonel*5;
        $sortie.='- '.$lieutenant.' lieutenant';
        if ($lieutenant>1) {
            $sortie.='s';
        }
        $sortie.=' dans l\'arm�e dirigeant 100 hommes chacun. Ils sont choisis pour leur talent avec une arme de corps-�-corps comme l\'�p�e ou la hache, soit pour leur talent � l\'arc ou pour leurs connaissances tactiques.<br>';
        $nbrhommearme=$nbrhommearme-$lieutenant;
        $nbrhommearme=$nbrhommearme-($lieutenant*100);
        $sortie.='Les unit�s de 100 hommes sont souvent sp�cialis�es. On retrouve des piquiers, �p�istes, archers';
        if (($armee+rand(0, 500))>1000) {
            $sortie.='mais �galement une cavalerie non n�gligeable';
        }
        $sortie.='.';
    }
    //echo $armee;
    if ($armee>501) {
        $sortie.='Les '.$nbrhommearme.' hommes restants sont quelques r�servistes ou retrait�s qui peuvent venir en aide � tout instant. ';
    }
    if ($nbrheros>0) {
        if ($nbrheros=1) {
            $sortie.='De plus le h�ro en ville peut tr�s bien reprendre les armes et se joindre aux forces arm�es. ';
        } else {
            $sortie.='De plus les h�ros vivants en ville peuvent rejoindre les rangs et aider les forces arm�es en cas de conflit important ou demande du dirigeant. ';
        }
    }
    if ($nbraventuriers >0) {
        if ($nbraventuriers=1) {
            $sortie.='Il est �galement possible de demander de l\'aide � l\'aventurier pr�sent en ville';
        } else {
            $sortie.='Pour finir, il est tout � fait envisageable de demander de l\'aide aux aventuriers pr�sents en ville';
        }
    }





    return $sortie;
}
