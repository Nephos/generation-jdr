<?php
function creercommerce($type,$particu,$typevillenum,$taille){
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
	
	include_once ('auberge.php');
	include_once ('nomevolue.php');
	include_once ('lieudit.php');
	$sortie='';
	$pasgob = array (1,2,3,4,6,7,8);
	$pasorkpasgob = array (1,3,4,6,7,8);
	$pashumain = array (1,3,4,6,8);
	$ex =rand(1,9);
	$exbis =rand(1,9);
	$raceisole = array (7,7,7,7,7,7,7,7,$exbis,$ex);
	$ex2=$pashumain[rand(0,count($pashumain)-1)];
	$ex3=$pashumain[rand(0,count($pashumain)-1)];
	$ex4=$pashumain[rand(0,count($pashumain)-1)];
	
	$raceouvert = array (7,7,7,7,7,$ex2,$ex2,$ex3,$ex4,$ex);
	
	
	$race= array();
	$hommedupeuple = array ("Un acrobate","Un jongleur","Un artiste de rue","Un(e) prostitu�(e)","Un tanneur","Un potier","Un menuisier","Un barbier","Un horloger","Un crieur public");
	$adepte = array ("Un soigneur","Un alchimiste","Un herboriste","Un apothicaire","Un scribe");
	$expert =array ("Un tisserand","Un palefrenier","Un architecte","Un forgeron","Un armurier","Un artisan du cuir","Un chasseur","Un tailleur de pierre","Un joaillier","Un cordonnier","Un charpentier","Un ma�on","Un me�nier","Un couturier","Un boquetier","Un bourreau","Un calamier ","Un homme de loi","Un assassin","Un navigateur","Un guide","Un fromager","Un �picier","Un vendeur d�objet rare","Un boulanger");
	$commerce = array ("Un dispensaire","Une �table","Une salle de jeux","Une petite �choppe de magie","Une librairie (non magique)","Un moulin","Un mar�chal-ferrant","Une maison de joie","Une menuiserie","Un h�tel","Une �picerie","Une boulangerie","Un temple d'une divinit� bonne","Une temple d'une divinit� mauvaise");
		
	$expertmarin = array ("Un chantier maritime","Une capitainerie","Un chantier naval","Un port","Une poissonnerie");
	$commercemarin = array ("Un cartographe","Une �quipe de mousses","Un capitaine","Un batelier","Un poissonnier");
	$titrenoblessefemfull =array ("Imp�ratrice","Reine","Grande-duchesse","Archiduchesse","Duchesse","Princesse","Marquise","Comtesse","Vicomtesse","Baronne","Dame","Premi�re Imp�ratrice","Premi�re Reine","Premi�re Grande-duchesse","Premi�re Archiduchesse","Premi�re Duchesse","Premi�re Princesse","Premi�re Marquise","Premi�re Comtesse","Premi�re Vicomtesse","Premi�re Baronne","Premi�re Dame","Seconde Imp�ratrice","Seconde Reine","Seconde Grande-duchesse","Seconde Archiduchesse","Seconde Duchesse","Seconde Princesse","Seconde Marquise","Seconde Comtesse","Seconde Vicomtesse","Seconde Baronne","Seconde Dame");
	$titrenoblessemasfull =array ("Empereur","Roi","Grand-duc","Archiduc","Duc","Prince","Marquis","Comte","Vicomte","Baron","Chevalier","�cuyer","Seigneur","Dauphin","Monsieur","Banneret","Baronnet","Ch�telain","Prince de sang","Premier Empereur","Premier Roi","Premier Grand-duc","Premier Archiduc ","Premier Duc ","Premier Prince","Premier Marquis","Premier Comte","Premier Vicomte","Premier Baron","Premier Chevalier","Premier �cuyer","Premier Seigneur","Premier Dauphin","Premier Banneret","Premier Baronnet","Premier Prince de sang","Premier Ch�telain","Second Empereur","Second Roi","Second Grand-duc","Second Archiduc","Second Duc","Second Prince","Second Marquis","Second Comte","Second Vicomte","Second Baron","Second Chevalier","Second �cuyer","Second Seigneur","Second Dauphin","Second Banneret","Second Baronnet","Second Prince de sang");
	$titrenoblessefemfaible =array("Duchesse","Marquise","Comtesse","Vicomtesse","Baronne","Dame","Premi�re Duchesse","Premi�re Marquise","Premi�re Comtesse","Premi�re Vicomtesse","Premi�re Baronne","Premi�re Dame","Seconde Duchesse","Seconde Marquise","Seconde Comtesse","Seconde Vicomtesse","Seconde Baronne","Seconde Dame");
	$titrenoblessemasfaible =array("Marquis","Comte","Vicomte","Baron","Chevalier","�cuyer","Seigneur","Dauphin","Monsieur","Banneret","Baronnet","Ch�telain","Premier Marquis","Premier Comte","Premier Vicomte","Premier Baron","Premier Chevalier","Premier �cuyer","Premier Seigneur","Premier Dauphin","Premier Banneret","Premier Baronnet","Premier Ch�telain","Second Marquis","Second Comte","Second Vicomte","Second Baron","Second Chevalier","Second �cuyer","Second Seigneur","Second Dauphin","Second Banneret","Second Baronnet");
	$noblessemas = array();
	$noblessefem = array();
	
	//type 1 commerce type 2 expert type 3 adpetes 4 nobles)
	//typevillenum 0 isol�e 1 ouverte vers l\'ext�rieur 2 cosmopolite 
	
	switch ($typevillenum){
		case 0:
			$race=$raceisole;
		break;
		case 1:
			$race=$raceouvert;
		break;
		case 2:
			$race=$pasorkpasgob;
		break;
		case 3:
		
		break;
	
	}
	
	
	if ($particu==1) {
		array_merge($expert,$expertmarin);
		array_merge($commerce,$commercemarin);
	}
	
	if ($taille<=3) {
		$noblessemas = $titrenoblessemasfaible;
		$noblessefem = $titrenoblessefemfaible;
	}
	else {
		$noblessemas = $titrenoblessemasfull;
		$noblessefem = $titrenoblessefemfull;
	}
	
	switch ($type) {
		case 1:
			if(rand(1,100)>50) {
				$nom=creerauberge();
				$sortie='Une auberge portant le nom : '.$nom.'<a href="index.php?page=aubergedetail&nom='.urlencode($nom).'" target="_blank"><i> D�tail</i></a>';;
				compteur('auberge');
			}
			else {
				$sortie=$commerce[rand(0,count($commerce)-1)].' tenu par '.creernomevo($race[rand(0,6)],rand(1,2));
			}
		break;
		case 2:
			$sortie=$expert[rand(0,count($expert)-1)].' du nom de '.creernomevo($race[rand(0,6)],rand(1,2));
		break;
		case 3:
			$sortie=$adepte[rand(0,count($adepte)-1)].' du nom de '.creernomevo($race[rand(0,6)],rand(1,2));
		break;
		case 4:
			$sexe=rand(1,2);
			if ($sexe==1) $sortie=creernomevo($race[rand(0,5)],$sexe).' '.$noblessemas[rand(0,count($noblessemas)-1)].' de '.creerlieudit(1); 
			else $sortie=creernomevo($race[rand(0,5)],$sexe).' '.$noblessefem[rand(0,count($noblessefem)-1)].' de '.creerlieudit(1); 
		break;
	}
	
	return $sortie;
}



?>



