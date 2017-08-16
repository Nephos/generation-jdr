<?php
	function creergemme($val){
		$gemmetype1 = array("Agate ruban�e","Agate iris","Agate de feu","Agate-mousse","Agate oeil de tigre","Azurite","Couronne d'argent","Fluorite","H�matite","Ivoire","Lapis-Lazuli","Malachite","Nelvine","N�phrite","Obsidienne","Perle (irr�guli�re)", "Quartz bleu","Quartz laiteux","Rhodochronsite","sanidine","Turquoise","Violine");
		$gemmetype2 = array("Andar","Aventurine","Calc�doine","Chrysoprase","Citrine","Cornaline","H�liotrope","Hydrophane","Iole","Iolite","Irtios","Jaspe","Onyx","Orprase","P�ridot","Ph�nalope","Pierre de lune","Quartz cristal de roche","Quartz rose","Quartz fum�","Sardoine","Sardonyx","Spodum�ne","Tchazar","Zircon");
		$gemmetype3 = array("Ambre","Am�thyste","Chrysob�ryl","Coral","Etoile d'eau","Grenat rouge","grenat vert sombre","Jade","jais","Larmes de La�rale","Peau d'agne","Perle dor�e","Perle rose","Perle argnet�e","Perle Blanche","Spinelle rouge","Spinelle rouge sombre","Spinelle vert sombre","Tourmaline blanche","Tourmaline dor�e","Tourmaline rose", "Perle d'argent");
		$gemmetype4 = array("Aigue-marine","Alexandrite","Grenat violet","Perle noire","Spinelle bleu nuit","Topaze jaune d'or");
		$gemmetype5 = array("Corbinard","Coridon jaune ambr�","Coridon pourpre","Coridon noir","Coridon bleu","Emeraude","Jade de s�pulere","Larmes rouges","Opale blanche","opale noire de feu","Opale d'eau","Orle","Rubis �toil�","Saphir �toil� noir","Saphir �toil� bleu");
		$gemmetype6 = array("Belgurile","Diamant limpide","Diamant jaune","Diamant rose","Diamant brun","Diamant bleu","Emeraude du vert le plus clair","Hyacinthe","Larmes de roi","Rubis");
		
		$gemme=array();
		
		if($val==0) $valeurDe =rand(1,100);
		if($val==1) $valeurDe =rand(1,25);
		if($val==2) $valeurDe =rand(26,70);
		if($val==3) $valeurDe =rand(71,99);
		if($val==4) $valeurDe =100;
		
		switch($valeurDe){
			case $valeurDe<=25;
				$gemme[0]=$gemmetype1[rand(0,count($gemmetype1)-1)];
				$gemme[1]=rand(4,16);
			break;
			case $valeurDe>25&&$valeurDe<=50;
				$gemme[0]=$gemmetype2[$type=rand(0,count($gemmetype2)-1)];
				$gemme[1]=rand(2,8)*10;
			break;
			case $valeurDe>=51&&$valeurDe<=70;
				$gemme[0]=$gemmetype3[$type=rand(0,count($gemmetype3)-1)];
				$gemme[1]=rand(4,16)*10;
			break;
			case $valeurDe>=71&&$valeurDe<=90;
				$gemme[0]=$gemmetype4[$type=rand(0,count($gemmetype4)-1)];
				$gemme[1]=rand(2,8)*100;
			break;
			case $valeurDe>=91&&$valeurDe<=99;
				$gemme[0]=$gemmetype5[$type=rand(0,count($gemmetype5)-1)];
				$gemme[1]=rand(4,16)*100;
			break;
			case $valeurDe==100;
				$gemme[0]=$gemmetype6[$type=rand(0,count($gemmetype6)-1)];
				$gemme[1]=rand(2,8)*1000;
			break;
		
		}
		
		return $gemme;
		
	}

?>