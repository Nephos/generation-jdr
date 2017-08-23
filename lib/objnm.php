<?php

function getNonMagical()
{
    $items = array();
    $percent = rand(1, 100);
    switch ($percent) {
            case ($percent<18):
                $percent = rand(1, 100);
                switch ($percent) {
                    case ($percent<13): $count=rand(1, 4); $items[]=array("Feu gr�gois (".$count." flasque(s))", $count*20); break;
                    case ($percent<25): $count=rand(2, 8); $items[]=array("Acide (".$count." flasque(s))", $count*10); break;
                    case ($percent<37): $count=rand(1, 4); $items[]=array("B�tonnet(s) fumig�ne(s) (".$count.")", $count*20); break;
                    case ($percent<49): $count=rand(1, 4); $items[]=array("Eau b�nite (".$count." flasque(s))", $count*25); break;
                    case ($percent<63): $count=rand(1, 4); $items[]=array("Antidote (".$count." dose(s))", $count*50); break;
                    case ($percent<75): $items[]=array("Torche �ternelle", 110); break;
                    case ($percent<89): $count=rand(1, 4); $items[]=array("Sacoche(s) immobilisante(s) (".$count.")", $count*50); break;
                    default: $count=rand(1, 4); $items[]=array("Pierre(s) � tonnerre (".$count.")", $count*30); break;
                }break;
            case ($percent<51):
                $percent = rand(1, 100);
                $taille = " de taille ".(rand(1, 100)<11 ? "P" : "M");
                switch ($percent) {
                    case ($percent<13): $items[]=array("Chemise de maille".$taille, 100); break;
                    case ($percent<19): $items[]=array("Armure de cuir clout�e de ma�tre".$taille, 175); break;
                    case ($percent<27): $items[]=array("Cuirasse".$taille, 200); break;
                    case ($percent<35): $items[]=array("Crevice".$taille, 250); break;
                    case ($percent<55): $items[]=array("Armure � plaques".$taille, 600); break;
                    case ($percent<81): $items[]=array("Harnois".$taille, 1500); break;
                    case ($percent<91):
                        $taille = " en �b�nite".$taille;
                        if (rand(1, 100)<51) {
                            $items[]=array("Rondache".$taille, 203);
                        } else {
                            $items[]=array("Ecu".$taille, 257);
                        }
                        break;
                    default:
                        $percent = rand(1, 100);
                        $taille = " de ma�tre".$taille;
                        switch ($percent) {
                            case ($percent<18): $items[]=array("Targe".$taille, 165); break;
                            case ($percent<41): $items[]=array("Rondache en bois".$taille, 153); break;
                            case ($percent<61): $items[]=array("Rondache en acier".$taille, 159); break;
                            case ($percent<84): $items[]=array("Ecu en bois".$taille, 157); break;
                            default: $items[]=array("Ecu en acier".$taille, 170);
                        }
                }break;
            case ($percent<84): $item = getBaseWeapon(rand(1, 3)); $item[0].=" de ma�tre"; $items[]=$item; break; //Armes
            default:    $percent=rand(1, 100);
                        switch ($percent) {
                            case ($percent<4): $items[]=array("Sac � dos vide", 2); break;
                            case ($percent<7): $items[]=array("Pied-de-biche", 2); break;
                            case ($percent<12): $items[]=array("Lanterne sourde", 12); break;
                            case ($percent<17): $items[]=array("Cadenas simple", 20); break;
                            case ($percent<22): $items[]=array("Cadenas moyen", 40); break;
                            case ($percent<29): $items[]=array("Bon cadenas", 80); break;
                            case ($percent<36): $items[]=array("Excellent cadenas", 150); break;
                            case ($percent<41): $items[]=array("Menottes de qualit� supp�rieure", 50); break;
                            case ($percent<44): $items[]=array("Petit miroir en acier", 10); break;
                            case ($percent<47): $items[]=array("Corde en soie (15m)", 10); break;
                            case ($percent<54): $items[]=array("Longue-vue", 1000); break;
                            case ($percent<59): $items[]=array("Outils de ma�tre artisan", 55); break;
                            case ($percent<64): $items[]=array("Mat�riel d'escalade", 80); break;
                            case ($percent<69): $items[]=array("Trousse de d�guisement", 50); break;
                            case ($percent<74): $items[]=array("Trousse de premiers secours", 50); break;
                            case ($percent<78): $items[]=array("Symb�le sacr� en argent", 25); break;
                            case ($percent<82): $items[]=array("Sablier", 25); break;
                            case ($percent<89): $items[]=array("Loupe", 100); break;
                            case ($percent<96): $items[]=array("Instrument de musique de ma�tre", 100); break;
                            default: $items[]=array("Outils de cambrioleur de qualit� sup�rieure", 50);
                         }
        }

    //print_r($items);
    $items[0][0] = " ".$items[0][0];
    return $items[0];
}

function getBaseWeapon($type)
{
    $percent = rand(1, 100);
    switch ($type) {
        case 1: switch ($percent) {
                    case ($percent<4): $item=array("B�ton", 600); break;
                    case ($percent<9): $item=array("Cimeterre", 315); break;
                    case ($percent<13): $item=array("Dague", 302); break;
                    case ($percent<23): $item=array("Ep�e � deux mains", 350); break;
                    case ($percent<33): $item=array("Ep�e b�tarde", 335); break;
                    case ($percent<38): $item=array("Ep�e courte", 310); break;
                    case ($percent<51): $item=array("Ep�e longue", 315); break;
                    case ($percent<61): $item=array("Grande hache", 320); break;
                    case ($percent<72): $item=array("Hache de guerre naine", 330); break;
                    case ($percent<76): $item=array("Kama", 302); break;
                    case ($percent<80): $item=array("Lance", 302); break;
                    case ($percent<84): $item=array("Masse d'armes l�g�re", 305); break;
                    case ($percent<89): $item=array("Masse d'armes lourde", 312); break;
                    case ($percent<93): $item=array("Nunchaku", 302); break;
                    case ($percent<97): $item=array("Rapi�re", 320); break;
                    default: $item=array("Siangham", 303);
                 }break;
        case 2: switch ($percent) {
                    case ($percent<11): $item=array("Arbal�te l�g�re", 335); break;
                    case ($percent<21): $item=array("Arbal�te lourde", 350); break;
                    case ($percent<26): $item=array("Arc court", 330); break;
                    case ($percent<31): $item=array("Arc court composite (for +0)", 375); break;
                    case ($percent<36): $item=array("Arc court composite (for +1)", 450); break;
                    case ($percent<41): $item=array("Arc court composite (for +2)", 525); break;
                    case ($percent<51): $item=array("Arc long", 375); break;
                    case ($percent<56): $item=array("Arc long composite (for +0)", 400); break;
                    case ($percent<61): $item=array("Arc long composite (for +1)", 500); break;
                    case ($percent<66): $item=array("Arc long composite (for +2)", 600); break;
                    case ($percent<71): $item=array("Arc long composite (for +3)", 700); break;
                    case ($percent<76): $item=array("Arc long composite (for +4)", 800); break;
                    case ($percent<80): $item=array("Dard", 300.5); break;
                    case ($percent<84): $item=array("Fronde", 300); break;
                    case ($percent<89): $item=array("Hache de lancer", 308); break;
                    case ($percent<91): $item=array("Javeline", 301); break;
                    default:    $percent=rand(1, 100);
                                switch ($percent) {
                                    case($percent<21): $item=array("Billes (50)", 350); break;
                                    case($percent<51): $item=array("Carreaux (50)", 350); break;
                                    default: $item=array("Fl�ches (50)", 350);
                                }
                 }break;
        default: switch ($percent) {
                    case ($percent<3): $item=array("Arbal�te l�g�re � r�p�tition", 550); break;
                    case ($percent<5): $item=array("Arbal�te lourde � r�p�tition", 700); break;
                    case ($percent<8): $item=array("Arbal�te de poing", 400); break;
                    case ($percent<10): $item=array("Bolas", 305); break;
                    case ($percent<13): $item=array("Cha�ne clout�e", 325); break;
                    case ($percent<15): $item=array("Cimeterre � deux mains", 375); break;
                    case ($percent<17): $item=array("Cors�que", 310); break;
                    case ($percent<19): $item=array("Coutille", 308); break;
                    case ($percent<21): $item=array("Dague coup-de-poing", 302); break;
                    case ($percent<24): $item=array("Double-lame", 700); break;
                    case ($percent<27): $item=array("Epieu", 301); break;
                    case ($percent<29): $item=array("Faux", 318); break;
                    case ($percent<31): $item=array("Filet", 320); break;
                    case ($percent<33): $item=array("Fl�au d'armes l�ger", 308); break;
                    case ($percent<37): $item=array("Fl�au d'armes lourd", 315); break;
                    case ($percent<40): $item=array("Fl�au double", 690); break;
                    case ($percent<42): $item=array("Fouet", 301); break;
                    case ($percent<44): $item=array("Gantelet", 302); break;
                    case ($percent<46): $item=array("Gantelet clout�", 305); break;
                    case ($percent<48): $item=array("Gourdin", 300); break;
                    case ($percent<50): $item=array("Guisarme", 309); break;
                    case ($percent<54): $item=array("Hache d'armes", 310); break;
                    case ($percent<57): $item=array("Hache double orque", 660); break;
                    case ($percent<59): $item=array("Hachette", 306); break;
                    case ($percent<62): $item=array("Hallebarde", 310); break;
                    case ($percent<65): $item=array("Kukri", 308); break;
                    case ($percent<68): $item=array("Lance d'ar�on", 310); break;
                    case ($percent<71): $item=array("Marteau de guerre", 312); break;
                    case ($percent<73): $item=array("Marteau l�ger", 301); break;
                    case ($percent<76): $item=array("Marteau-piolet gnome", 620); break;
                    case ($percent<78): $item=array("Massue", 305); break;
                    case ($percent<80): $item=array("Matraque", 301); break;
                    case ($percent<83): $item=array("Morgenstern", 308); break;
                    case ($percent<85): $item=array("Pic de guerre l�ger", 304); break;
                    case ($percent<87): $item=array("Pic de guerre lourd", 308); break;
                    case ($percent<90): $item=array("Pique", 305); break;
                    case ($percent<92): $item=array("Sai", 301); break;
                    case ($percent<94): $item=array("Serpe", 306); break;
                    case ($percent<96): $item=array("Shuriken (50)", 301); break;
                    case ($percent<98): $item=array("Trident", 315); break;
                    default: $item=array("Urgosh nain", 605);
                 }
    }
    return $item;
}
