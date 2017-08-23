<?php
function creerpiege($puissance)
{
    $piegetype1 = array("aiguille empoisonn�e est tir�e vers lui",
"bloc de pierre propuls� dans sa direction",
"un rocher chute sur lui",
"une faux tranchante s'attaque � lui",
"un fil tranchant en travers du couloir est propuls� vers lui",
"une fl�che est tir�e dans sa direction",
"une fl�chette empoisonn�e est tir�e dans sa direction",
"une fosse camoufl�e s'ouvre sous ses pieds",
"une fosse profonde s'ouvre sous ses pieds",
"une lame dissimul�e dans un mur s'attaque � lui",
"une lance est tir�e dans sa direction",
"une parcelle s'�fondre ",
"une vol�e de fl�chettes est tir�e dans sa direction",
"une aiguille empoisonn�e est tir�e dans sa direction",
"un sort de blessure l�g�re est lib�r�",
"une bo�te de moisissure brune tombe sur lui",
"des briques tombant du plafond",
"une cha�ne en travers un couloir est propuls� vers lui",
"une fosse s'ouvre",
"une fosse h�ris�e de pieux s'ouvre sous ses pieds",
"un grand filet tombe sur lui",
"une javeline est tir�e sur lui",
"un sort de mains brulante est lib�r� sur lui",
"un sort de baiser de la goule est lib�r� sur lui",
"un balancier fix� au plafond bascule avec des gravats sur lui",
"une chute de pierres depuis le plafond tombe sur lui",
"une fl�che acide de Melf est libr�e vers lui",
"le sort Impr�cation en extension d'effet est envoy� sur lui");

    $piegetype2 = array(
"une collone s'effondre sur lui",
"une sort Eclair est lib�r� vers lui",
"une faux dissimul�e dans le mur est lib�r�e en direction du joueur",
"un sort de glyphe de garde (explosif) est lib�r� contre lui",
"un gouffre h�riss� de pieux s'ouvre sous ses pieds",
"un sort de mal�diction est lib�r� contre lui",
"la salle se rempli d'eau",
"un sort sceau du serpent est lib�r�e contre lui",
"un sort d'assassin imaginaire est lib�r� contre lui",
"une boule de feu est lanc�e dans sa direction",
"une chute de bloc de pierre arrive sur lui",
"une pi�ge � feu est lib�r�",
"un pieux empoisonn�s dans le mur est envoy� vers lui",
"une statue s'anime et un combat s'engage",
"une colonne de feu est lib�r�e sur lui",
"un �clair est envoy� vers lui",
"une fl�che empoisonn�e est lanc�e dans sa direction",
"une fosse h�riss�e de pieux (Xm de profondeur) s'ouvre sous ses pieds",
"les murs se rapproche");

    $piegetype3 = array(
"un sort de barriere est lib�r� sur lui",
"une brume acide s'�chape des murs (comme sort)",
"un sort de convocation de monstre VI est lib�r�",
"un sort d'�clair multipe est lib�r�",
"un sort de tentacules noirs d'Evard est lib�r�",
"de la vapeur est propuls�e par les murs",
"le sort destruction est lanc�e sur lui",
"une faux empoisonn�e et dissimul�e dans le mur est lib�r�e en direction du joueur",
"un sort de fl�che acide de Melf est lanc�",
"la gravit� s'inverse",
"un mot de pouvoir �tourdissant est prononc�",
"le sort parole du chaos est lanc�",
"un rayon prismatique est lanc�",
"un sort de tremblement de terre est activ�",
"un nuage incendiare sort des murs",
"le plafond descend",
"une sort d'absortion d'�nergie est activ�",
"une cage de force est activ�e suivit d'une convocation de monstres VII toute retraite est impossible",
"une fosse h�riss�e de pieux empoisonn�s s'ouvre sous ses pieds",
"le sort plainte d'outre tombe est lanc�");


    $action = array("ouvre la porte", "actionne le levier" ,"passe la porte","touche la poign�e","marche sur la dale",
"ouvre la grille","allume une bougie","fait trop de bruit");


    $piege='';
    switch ($puissance) {
        case 0:
            $piege.='Lorsque le Pj '. $action[rand(0, count($action)-1)]. ', '.$piegetype1[rand(0, count($piegetype1)-1)].'.';
        break;
        case 1:
            $piege.='Lorsque le Pj '. $action[rand(0, count($action)-1)]. ', '.$piegetype2[rand(0, count($piegetype2)-1)].'.';
        break;
        case 2:
            $piege.='Lorsque le Pj '. $action[rand(0, count($action)-1)]. ', '.$piegetype3[rand(0, count($piegetype3)-1)].'.';
        break;

    }
    return $piege;
}
