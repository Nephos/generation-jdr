<?php

function creerauberge(){
	// Nom Feminin singulier
	$CreFemCon = array("belette", "loutre", "marmotte", "m�sange", "mouche", "mouette", "pieuvre", "wyverne", "grenouille", "marmotte"); 
	$CreFemVoy = array("anguille", "hydre", "araign�e", "abeille"); 
	// Adjectif Feminin singulier
	$AdjFemCre = array("rieuse", "animm�e", "jaune", "cuivr�e", "brais�e", "farcie", "verte", "malade", "noire", "fringante", "malchanceuse", "gourmande", "fum�e", "crev�e", "enrag�e", "rieuse");
	// Nom Masculin Singulier
	$ObjFemCon = array("bougie", "oreille", "bouteille", "chopine", "couronne", "cuill�re", "plume", "po�lle", "table", "chope", "fleur", "fl�te", "fourchette", "barbe", "lance");
	
	// Adjectif Masculin Singulier
	$AdjFemObj = array("rouge", "br�lante", "hurlante", "perc�e", "bris�e", "dor�e", "sale", "noircie", "fondue");
	
	// Nom Feminin singulier
	$CreMasCon = array("chat", "chien", "griffon", "cochon", "dauphin", "dragon", "faucon", "gobelin", "h�ron", "mouton", "poisson", "poney", "renard", "sanglier", "troll", "blaireau", "chat", "forgeron", "poney", "poulet", "corbeau", "crapaud", "cochon", "cafard", "faucon", "h�risson", "h�ron", "sanglier", "troll", "dragon"); 
	$CreMasVoy = array("aigle", "ours");
	// Adjectif Feminin singulier
	$AdjMasCre = array("blanc", "jaune", "fum�", "rieur", "sympathique", "noir", "enrag�", "malicieux", "bleu", "malchanceux", "copieux", "hurlant", "sentimental", "brais�", "brul�", "magique", "fringant", "insatiable", "fraceur", "chantant");
	// Nom Masculin Singulier
	$ObjMasCon = array("luth", "chaudron", "comptoir", "tonneau", "bouclier", "chaudron", "chiffon", "coin", "glaive");
	// Adjectif Masculin Singulier
	$AdjMasObj = array("rouge", "br�lant", "hurlant", "perc�", "bris�", "dor�", "sale", "noirci", "fondu", "vert", "bleu", "�lim�", "fondu", "fendu", "dor�");
	
	//QuaNum		Aux		
	$QuaNum = array("cinq", "deux", "trois", "quatre", "cinq", "six", "cent", "mille");
	
	//Personnage
	$Perso = array("Mahyar","Minst","Mirra","Avygael","Taklin", "Rudolf", "Argawen", "Hadush", "Ash", "Pam", "Rick Tapdur", "Eris","Saumeth","Latur","Grecarsos","Trados","Burtath","Gigollel","Kolecan","Lodersan","Lacesor","Pamilion","Ascis","Etal","Druveth","Poncebrar","Bomis","Proris","Piscur","Kodien","Mecegrus","Jimican","Drae","Gige","Remithath","Pedus","Gisin","Siscel","Calin","Bertas","Baran");
		
	
	//lieu
	$LieFemCon = array("brasserie", "cabane", "hutte", "maison", "table", "taverne");
	$LieMasCon = array("foyer", "g�te", "bar", "bol", "chaudron", "ch�ne", "coin", "comptoire", "gobelet", "relais", "repaire", "tonneau", "mouchoir", "comptoir");
	
	//quineu
	$QuiNeu = array("fume", "grogne", "grogne", "rote", "craque", "louche");
	// du
	$du = array("troll", "rodeur", "mage", "sorcier", "nain", "voisin", "voyageur", "marcheur", "coureur de jupons", "grand-p�re", "vaillant", "p�lerin", "pirate");
	
	$d = array("or", "argent", "adamantium");
	$des = array("quatres chemins", "l�gendes", "r�ves", "plaisirs", "quais", "chansons", "portes", "caravanes", "rencontres", "p�lerins", "deux tours", "petites personnes", "halfelins", "gobelins");
	$dela = array("longue barbe", "courtisane", "voisine", "petite personne");
	
	$auberge='';
	switch(rand(1,19)){
		case 1;
			$auberge.='A la '.$CreFemCon[rand(0,count($CreFemCon)-1)].' '.$AdjFemCre[rand(0,count($AdjFemCre)-1)];
		break;
		case 2;
			$auberge.='A la '.$ObjFemCon[rand(0,count($ObjFemCon)-1)].' '.$AdjFemObj[rand(0,count($AdjFemObj)-1)];
		break;
		case 3;
			$auberge.='La '.$CreFemCon[rand(0,count($CreFemCon)-1)].' '.$AdjFemCre[rand(0,count($AdjFemCre)-1)];
		break;
		case 4;
			$auberge.='Au '.$ObjMasCon[rand(0,count($ObjMasCon)-1)].' '.$AdjMasObj[rand(0,count($AdjMasObj)-1)];
		break;
		case 5;
			$auberge.='Le '.$ObjMasCon[rand(0,count($ObjMasCon)-1)].' et le '.$ObjMasCon[rand(0,count($ObjMasCon)-1)];
		break;
		case 6;
			$auberge.='La '.$CreFemCon[rand(0,count($CreFemCon)-1)].' et le '.$ObjMasCon[rand(0,count($ObjMasCon)-1)];
		break;
		case 7;
			$auberge.='Le '.$ObjMasCon[rand(0,count($ObjMasCon)-1)].' et la '.$CreFemCon[rand(0,count($CreFemCon)-1)];
		break;
		case 8;
			$auberge.='La '.$CreFemCon[rand(0,count($CreFemCon)-1)].' et la '.$CreFemCon[rand(0,count($CreFemCon)-1)];
		break;
		case 9;
			$auberge.='Aux '.$QuaNum[rand(0,count($QuaNum)-1)].' ';
			switch (rand(0,3)) {
				case 0;
					$auberge.=$CreFemCon[rand(0,count($CreFemCon)-1)];
				break;
				case 1;
					$auberge.=$ObjMasCon[rand(0,count($ObjMasCon)-1)];
				break;
				case 2;
					$auberge.=$ObjFemCon[rand(0,count($ObjFemCon)-1)];
				break;
				case 3;
					$auberge.=$CreMasCon[rand(0,count($CreMasCon)-1)];
				break;			
			}
			if ( substr($auberge, -2) =="au")$auberge.='x';
			else $auberge.='s'; 
		break;
		case 10;
			$auberge.='Au '.$ObjMasCon[rand(0,count($ObjMasCon)-1)].' '.$AdjMasObj[rand(0,count($AdjMasObj)-1)];
		break;
		case 11;
			$auberge.='A l\''.$CreFemVoy[rand(0,count($CreFemVoy)-1)].' '.$AdjFemCre[rand(0,count($AdjFemCre)-1)];
		break;
		case 12;
			$auberge.='A l\''.$CreMasVoy[rand(0,count($CreMasVoy)-1)].' '.$AdjMasCre[rand(0,count($AdjFemCre)-1)];
		break;
		case 13;
			$auberge.='Chez '.$Perso[rand(0,count($Perso)-1)];
		break;
		case 14;
			$auberge.='A la '.$LieFemCon[rand(0,count($LieFemCon)-1)].' du '.$CreMasCon[rand(0,count($CreMasCon)-1)];
		break;
		case 15;
			$auberge.='A la '.$LieFemCon[rand(0,count($LieFemCon)-1)].' de la '.$CreFemCon[rand(0,count($CreFemCon)-1)].' '.$AdjFemCre[rand(0,count($AdjFemCre)-1)];
		break;
		case 16;
			$auberge.='Au '.$LieMasCon[rand(0,count($LieMasCon)-1)];
			switch (rand(0,3)){
				case 0;
					$auberge.=' du '.$du[rand(0,count($du)-1)];	
				break;
				case 1;
					$auberge.=' d\''.$d[rand(0,count($d)-1)];
				break;
				case 2;
					$auberge.=' des '.$des[rand(0,count($des)-1)];
				break;
				case 3;
					$auberge.=' de la '.$dela[rand(0,count($dela)-1)];
				break;
				
			}
		break;
		case 17;
			$auberge.='Au '.$LieMasCon[rand(0,count($LieMasCon)-1)].' de la '.$CreFemCon[rand(0,count($CreFemCon)-1)].' '.$AdjFemCre[rand(0,count($AdjFemCre)-1)];
		break;
		case 18;
			$auberge.='A la '.$CreFemCon[rand(0,count($CreFemCon)-1)].' qui '.$QuiNeu[rand(0,count($QuiNeu)-1)];
		break;
		case 19;
			$auberge.='Au '.$CreMasCon[rand(0,count($CreMasCon)-1)].' qui '.$QuiNeu[rand(0,count($QuiNeu)-1)];
		break;
	}
	return $auberge;
}



?>