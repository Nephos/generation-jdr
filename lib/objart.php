<?php
	function creerobjart($val){
		//gemme d�corative
		$gemmetype1 = array("Agates ruban�e","Agates iris","Agates de feu","Agates-mousse","Agates oeil de tige","Azurites","Couronnes d'argent","Fluorites","H�matites","Ivoires","Lapis-Lazuli","Malachites","Nelvines","N�phrites","Obsidiennes","Perles (irr�guli�re)", "Quartz bleu","Quartz laiteux","Rhodochronsiteq","Sanidines","Turquoises","Violines");
		$gemmetype2 = array("Andars","Aventurines","Calc�doines","Chrysoprases","Citrines","Cornalines","H�liotropes","Hydrophanes","Ioles","Iolites","Irtios","Jaspes","Onyx","Orprases","P�ridots","Ph�nalopes","Pierres de lune","Quartz cristal de roche","Quartz rose","Quartz fum�","Sardoines","Sardonyx","Spodum�nes","Tchazars","Zircons");
		$gemmetype3 = array("Ambre","Am�thyste","Chrysob�ryl","Coral","Etoile d'eau","Grenat rouge","grenat vert sombre","Jade","jais","Larmes de La�rale","Peau d'agne","Perle dor�e","Perle rose","Perle argnet�e","Perle Blanche","Spinelle rouge","Spinelle rouge sombre","Spinelle vert sombre","Tourmaline blanche","Tourmaline dor�e","Tourmaline rose", "Perle d'argent");
		$gemmetype4 = array("Aigue-marine","Alexandrite","Grenat violet","Perle noire","Spinelle bleu nuit","Topaze jaune d'or");
		$gemmetype5 = array("Corbinard","Coridon jaune ambr�","Coridon pourpre","Coridon noir","Coridon bleu","Emeraude","Jade de s�pulere","Larmes rouges","Opale blanche","opale noire de feu","Opale d'eau","Orle","Rubis �toil�","Saphir �toil� noir","Saphir �toil� bleu");
		$gemmetype6 = array("Belgurile","Diamant limpide","Diamant jaune","Diamant rose","Diamant brun","Diamant bleu","Emeraude du vert le plus clair","Hyacinthe","Larmes de roi","Rubis");
		//type d'objet
		$objtype1 = array("Aigui�re","Bracelet","Peigne","Chope","Ep�e longue d'apparat","Chaine","Anneau","Coupe","boucle d'oreille","Couronne","Serre t�te","Collier","pendentif","Dague d'apparat");
		
		$objtype2 = array("Statuette","Masque","Vase","Poterie","Couronne","Bo�te � musique","Calice","Chandelier");
		
		$objtype3 = array("Robe","Manteau","Tapisserie","Gants","toge/cape");
		
		$objtype4 = array("Harpe","Flute","Cithare","Lyre","Luth","Trompette");
		
		$objtype5 = array("Tableau","Po�me","Partition","Sc�ne");
		//type mati�re
		//fer cuivre argent Argent alchimique or platine Fer froid mytril adamantium
		$mattype1 = array("fer","cuivre","os","ch�ne");
		$mattype2 = array("argent","Argent alchimique","or","os","ivoire","bois exotique");
		$mattype3 = array("or","platine","Fer froid","mytril","corne de dragon");
		$mattype4 = array("Fer froid","mytril","Adamantium","admantium");
		
		//objet vetement
		$mattype9= array("laine", "velours");
		$mattype10= array("soie","laine","futaine","velours");
		$mattype11= array("cuir souple","peau fine de dragon");
		
		//objet musique
		$mattype12 = array("bois simple","os");
		$mattype13 = array("ch�ne","bois rare","orme","ch�taignier ");
		$mattype14 = array("ch�ne elfique","ch�ne ancestral","ch�taignier  ancestral"); 
		$mattype15 = array("os de dragon","bois exotique", "ch�ne elfique plusieurs fois centenaires", "Eb�nite");
		
		//type artiste
		$arttype1 = array ("'un artiste inconnu");
		$arttype2 = array ("'un artiste peu connu");
		$arttype3 = array ("'un artiste connu");
		$arttype4 = array ("'un artiste c�l�bre");
		$type='';
		$objet=array();
		$valeurDe =rand(1,100);
		
		if($val==0) $valeurDe =rand(1,100);
		if($val==1) $valeurDe =rand(1,40);
		if($val==2) $valeurDe =rand(41,70);
		if($val==3) $valeurDe =rand(71,90);
		if($val==4) $valeurDe =rand(91,100);
		
		switch($valeurDe){
			case $valeurDe>0&&$valeurDe<=10;
				$type=rand(1,5);
				switch($type){
					case $type==1;
						$objet[0]=$objtype1[rand(0,count($objtype1)-1)]." en ".$mattype1[rand(0,count($mattype1)-1)];
					break;
					case $type==2;
						$objet[0]=$objtype2[rand(0,count($objtype2)-1)]." en ".$mattype1[rand(0,count($mattype1)-1)];
					break;
					case $type==3;
						$objet[0]=$objtype3[rand(0,count($objtype3)-1)]." en ".$mattype9[rand(0,count($mattype9)-1)];			
					break;
					case $type==4;
						$objet[0]=$objtype4[rand(0,count($objtype4)-1)]." en ".$mattype12[rand(0,count($mattype12)-1)];
					break;
					case $type==5;
						$objet[0]=$objtype5[rand(0,count($objtype5)-1)]." d".$arttype1[rand(0,count($arttype1)-1)];
					break;
				}
				$objet[1]=rand(1,10)*10;
			break;
			case $valeurDe>=10&&$valeurDe<=25;
				$type=rand(1,5);
				switch($type){
					case $type==1;
						$objet[0]=$objtype1[rand(0,count($objtype1)-1)]." en ".$mattype1[rand(0,count($mattype1)-1)];
					break;
					case $type==2;
						$objet[0]=$objtype2[rand(0,count($objtype2)-1)]." en ".$mattype1[rand(0,count($mattype1)-1)];
					break;
					case $type==3;
						$objet[0]=$objtype3[rand(0,count($objtype3)-1)]." en ".$mattype9[rand(0,count($mattype9)-1)];			
					break;
					case $type==4;
						$objet[0]=$objtype4[rand(0,count($objtype4)-1)]." en ".$mattype12[rand(0,count($mattype12)-1)];
					break;
					case $type==5;
						$objet[0]=$objtype5[rand(0,count($objtype5)-1)]." d".$arttype1[rand(0,count($arttype1)-1)];
					break;
				}
				$objet[1]=rand(3,18)*10;
			break;
			case $valeurDe>=26&&$valeurDe<=40;
				$type=rand(1,5);
				switch($type){
					case $type==1;
						$objet[0]=$objtype1[rand(0,count($objtype1)-1)]." en ".$mattype1[rand(0,count($mattype1)-1)]." serti de plusieurs ".$gemmetype1[rand(0,count($gemmetype1)-1)];
					break;
					case $type==2;
						$objet[0]=$objtype2[rand(0,count($objtype2)-1)]." en ".$mattype1[rand(0,count($mattype1)-1)]." serti de plusieurs ".$gemmetype1[rand(0,count($gemmetype1)-1)];
					break;
					case $type==3;
						$objet[0]=$objtype3[rand(0,count($objtype3)-1)]." en ".$mattype9[rand(0,count($mattype9)-1)];			
					break;
					case $type==4;
						$objet[0]=$objtype4[rand(0,count($objtype4)-1)]." en ".$mattype12[rand(0,count($mattype12)-1)]." incrust� de ".$gemmetype1[rand(0,count($gemmetype1)-1)];
					break;
					case $type==5;
						$objet[0]=$objtype5[rand(0,count($objtype5)-1)]." d".$arttype1[rand(0,count($arttype1)-1)];
					break;
				}
				$objet[1]=rand(1,6)*100;
			break;
			case $valeurDe>=41&&$valeurDe<=50;
				$type=rand(1,5);
				switch($type){
					case $type==1;
						$objet[0]=$objtype1[rand(0,count($objtype1)-1)]." en ".$mattype2[rand(0,count($mattype2)-1)];
					break;
					case $type==2;
						$objet[0]=$objtype2[rand(0,count($objtype2)-1)]." en ".$mattype2[rand(0,count($mattype2)-1)];
					break;
					case $type==3;
						$objet[0]=$objtype3[rand(0,count($objtype3)-1)]." en ".$mattype9[rand(0,count($mattype9)-1)]." orn� de fil de ".$mattype4[rand(0,count($mattype4)-1)];			
					break;
					case $type==4;
						$objet[0]=$objtype4[rand(0,count($objtype4)-1)]." en ".$mattype13[rand(0,count($mattype13)-1)];
					break;
					case $type==5;
						$objet[0]=$objtype5[rand(0,count($objtype5)-1)]." d".$arttype2[rand(0,count($arttype2)-1)];
					break;
				}
				$objet[1]=rand(1,10)*100;
			break;
			case $valeurDe>=51&&$valeurDe<=60;
				$type=rand(1,5);
				switch($type){
					case $type==1;
						$objet[0]=$objtype1[rand(0,count($objtype1)-1)]." en ".$mattype2[rand(0,count($mattype2)-1)]." serti de plusieurs ".$gemmetype2[rand(0,count($gemmetype2)-1)];
					break;
					case $type==2;
						$objet[0]=$objtype2[rand(0,count($objtype2)-1)]." en ".$mattype2[rand(0,count($mattype2)-1)]." serti de plusieurs ".$gemmetype2[rand(0,count($gemmetype2)-1)];
					break;
					case $type==3;
						$objet[0]=$objtype3[rand(0,count($objtype3)-1)]." en ".$mattype10[rand(0,count($mattype10)-1)];			
					break;
					case $type==4;
						$objet[0]=$objtype4[rand(0,count($objtype4)-1)]." en ".$mattype13[rand(0,count($mattype13)-1)]." incrust� de ".$gemmetype2[rand(0,count($gemmetype2)-1)];
					break;
					case $type==5;
						$objet[0]=$objtype5[rand(0,count($objtype5)-1)]." d".$arttype2[rand(0,count($arttype2)-1)];
					break;
				}
				$objet[1]=rand(2,12)*100;
			break;
			case $valeurDe>=61&&$valeurDe<=70;
				$type=rand(1,5);
				switch($type){
					case $type==1;
						$objet[0]=$objtype1[rand(0,count($objtype1)-1)]." en ".$mattype2[rand(0,count($mattype2)-1)]." serti de plusieurs ".$gemmetype3[rand(0,count($gemmetype3)-1)];
					break;
					case $type==2;
						$objet[0]=$objtype2[rand(0,count($objtype2)-1)]." en ".$mattype2[rand(0,count($mattype2)-1)]." serti de plusieurs ".$gemmetype3[rand(0,count($gemmetype3)-1)];
					break;
					case $type==3;
						$objet[0]=$objtype3[rand(0,count($objtype3)-1)]." en ".$mattype10[rand(0,count($mattype10)-1)];			
					break;
					case $type==4;
						$objet[0]=$objtype4[rand(0,count($objtype4)-1)]." en ".$mattype13[rand(0,count($mattype13)-1)]." incrust� de ".$gemmetype3[rand(0,count($gemmetype3)-1)];
					break;
					case $type==5;
						$objet[0]=$objtype5[rand(0,count($objtype5)-1)]." d".$arttype2[rand(0,count($arttype2)-1)];
					break;
				}
				$objet[1]=rand(3,18)*100;
			break;
			case $valeurDe>=71&&$valeurDe<=80;
				$type=rand(1,5);
				switch($type){
					case $type==1;
						$objet[0]=$objtype1[rand(0,count($objtype1)-1)]." en ".$mattype3[rand(0,count($mattype3)-1)]." serti de plusieurs ".$gemmetype2[rand(0,count($gemmetype2)-1)];
					break;
					case $type==2;
						$objet[0]=$objtype2[rand(0,count($objtype2)-1)]." en ".$mattype3[rand(0,count($mattype3)-1)]." serti de plusieurs ".$gemmetype2[rand(0,count($gemmetype2)-1)];
					break;
					case $type==3;
						$objet[0]=$objtype3[rand(0,count($objtype3)-1)]." en ".$mattype10[rand(0,count($mattype10)-1)];			
					break;
					case $type==4;
						$objet[0]=$objtype4[rand(0,count($objtype4)-1)]." en ".$mattype14[rand(0,count($mattype14)-1)]." incrust� de ".$gemmetype2[rand(0,count($gemmetype2)-1)];
					break;
					case $type==5;
						$objet[0]=$objtype5[rand(0,count($objtype5)-1)]." d".$arttype3[rand(0,count($arttype3)-1)];
					break;
				}
				$objet[1]=rand(4,24)*100;
			break;
			case $valeurDe>=81&&$valeurDe<=85;
				$type=rand(1,5);
				switch($type){
					case $type==1;
						$objet[0]=$objtype1[rand(0,count($objtype1)-1)]." en ".$mattype3[rand(0,count($mattype3)-1)]." serti de plusieurs ".$gemmetype3[rand(0,count($gemmetype3)-1)];
					break;
					case $type==2;
						$objet[0]=$objtype2[rand(0,count($objtype2)-1)]." en ".$mattype3[rand(0,count($mattype3)-1)]." serti de plusieurs ".$gemmetype3[rand(0,count($gemmetype3)-1)];
					break;
					case $type==3;
						$objet[0]=$objtype3[rand(0,count($objtype3)-1)]." en ".$mattype10[rand(0,count($mattype10)-1)]." orn� de fil de ".$mattype4[rand(0,count($mattype4)-1)];	
					break;
					case $type==4;
						$objet[0]=$objtype4[rand(0,count($objtype4)-1)]." en ".$mattype14[rand(0,count($mattype14)-1)]." incrust� de ".$gemmetype3[rand(0,count($gemmetype3)-1)];
					break;
					case $type==5;
						$objet[0]=$objtype5[rand(0,count($objtype5)-1)]." d".$arttype3[rand(0,count($arttype3)-1)];
					break;
				}
				$objet[1]=rand(5,30)*100;
			break;
			case $valeurDe>=86&&$valeurDe<=90;
				$type=rand(1,5);
				switch($type){
					case $type==1;
						$objet[0]=$objtype1[rand(0,count($objtype1)-1)]." en ".$mattype3[rand(0,count($mattype3)-1)]." serti de plusieurs ".$gemmetype4[rand(0,count($gemmetype4)-1)];
					break;
					case $type==2;
						$objet[0]=$objtype2[rand(0,count($objtype2)-1)]." en ".$mattype3[rand(0,count($mattype3)-1)]." serti de plusieurs ".$gemmetype4[rand(0,count($gemmetype4)-1)];
					break;
					case $type==3;
						$objet[0]=$objtype3[rand(0,count($objtype3)-1)]." en ".$mattype11[rand(0,count($mattype11)-1)];			
					break;
					case $type==4;
						$objet[0]=$objtype4[rand(0,count($objtype4)-1)]." en ".$mattype14[rand(0,count($mattype14)-1)]." incrust� de ".$gemmetype4[rand(0,count($gemmetype4)-1)];
					break;
					case $type==5;
						$objet[0]=$objtype5[rand(0,count($objtype5)-1)]." d".$arttype3[rand(0,count($arttype3)-1)];
					break;
				}
				$objet[1]=rand(1,4)*1000;
			break;
			case $valeurDe>=91&&$valeurDe<=95;
				$type=rand(1,5);
				switch($type){
					case $type==1;
						$objet[0]=$objtype1[rand(0,count($objtype1)-1)]." en ".$mattype4[rand(0,count($mattype4)-1)]." serti de plusieurs ".$gemmetype4[rand(0,count($gemmetype4)-1)];
					break;
					case $type==2;
						$objet[0]=$objtype2[rand(0,count($objtype2)-1)]." en ".$mattype4[rand(0,count($mattype4)-1)]." serti de plusieurs ".$gemmetype4[rand(0,count($gemmetype4)-1)];
					break;
					case $type==3;
						$objet[0]=$objtype3[rand(0,count($objtype3)-1)]." en ".$mattype11[rand(0,count($mattype11)-1)];			
					break;
					case $type==4;
						$objet[0]=$objtype4[rand(0,count($objtype4)-1)]." en ".$mattype15[rand(0,count($mattype15)-1)]." incrust� de ".$gemmetype4[rand(0,count($gemmetype4)-1)];
					break;
					case $type==5;
						$objet[0]=$objtype5[rand(0,count($objtype5)-1)]." d".$arttype4[rand(0,count($arttype4)-1)];
					break;
				}
				$objet[1]=rand(1,6)*1000;
			break;
			case $valeurDe>=96&&$valeurDe<=99;
				$type=rand(1,5);
				switch($type){
					case $type==1;
						$objet[0]=$objtype1[rand(0,count($objtype1)-1)]." en ".$mattype4[rand(0,count($mattype4)-1)]." serti de plusieurs ".$gemmetype5[rand(0,count($gemmetype5)-1)];
					break;
					case $type==2;
						$objet[0]=$objtype2[rand(0,count($objtype2)-1)]." en ".$mattype4[rand(0,count($mattype4)-1)]." serti de plusieurs ".$gemmetype5[rand(0,count($gemmetype5)-1)];
					break;
					case $type==3;
						$objet[0]=$objtype3[rand(0,count($objtype3)-1)]." en ".$mattype11[rand(0,count($mattype11)-1)];			
					break;
					case $type==4;
						$objet[0]=$objtype4[rand(0,count($objtype4)-1)]." en ".$mattype15[rand(0,count($mattype15)-1)]." incrust� de ".$gemmetype5[rand(0,count($gemmetype5)-1)];
					break;
					case $type==5;
						$objet[0]=$objtype5[rand(0,count($objtype5)-1)]." d".$arttype4[rand(0,count($arttype4)-1)];
					break;
				}
				$objet[1]=rand(2,8)*1000;
			break;
			case $valeurDe==100;
				$type=rand(1,5);
				switch($type){
					case $type==1;
						$objet[0]=$objtype1[rand(0,count($objtype1)-1)]." en ".$mattype4[rand(0,count($mattype4)-1)]." serti de plusieurs ".$gemmetype6[rand(0,count($gemmetype6)-1)];
					break;
					case $type==2;
						$objet[0]=$objtype2[rand(0,count($objtype2)-1)]." en ".$mattype4[rand(0,count($mattype4)-1)]." serti de plusieurs ".$gemmetype6[rand(0,count($gemmetype6)-1)];
					break;
					case $type==3;
						$objet[0]=$objtype3[rand(0,count($objtype3)-1)]." en ".$mattype11[rand(0,count($mattype11)-1)]." orn� de fil de ".$mattype4[rand(0,count($mattype4)-1)];		
					break;
					case $type==4;
						$objet[0]=$objtype4[rand(0,count($objtype4)-1)]." en ".$mattype15[rand(0,count($mattype15)-1)]." incrust� de ".$gemmetype6[rand(0,count($gemmetype6)-1)];
					break;
					case $type==5;
						$objet[0]=$objtype5[rand(0,count($objtype5)-1)]." d".$arttype4[rand(0,count($arttype4)-1)];
					break;
				}
				$objet[1]=rand(2,12)*1000;
			break;
	
	}
	return $objet;
}
	
?>