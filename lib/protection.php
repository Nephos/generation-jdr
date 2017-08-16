<?php

function appelprotection($protection,$nomduvillage,$particu,$taille){
	include ('porte.php');
	include ('chateau.php');
	
	$sortie='';
	$geo=array('la rivi�re', 'le gouffre', 'la colline','le flanc de montage', 'le foss�','la for�t','le fleuve','le lac','le pic rocheux');
	$porte=rand(2,3)+ceil($protection/2);
	
	
	$sortie.='.<br><br><h4>Protection</h4>';
	$sortie.=$nomduvillage;
	if ($protection<=13) {
		$sortie.=', ne poss�de aucune protection particuli�re sauf ses habitants et sa milice.';
		$detailporte=detailport(1);
		
	}
	else if ($protection<=18) {
		$sortie.=', poss�de un mur d\'enceinte fortifi�';
		$detailporte=detailport(2);
		
		if (rand(1,100)>5) $sortie.=', de plus, '.$geo[rand(0,count($geo)-1)]. ' se trouvant � proximit� donne une protection naturelle fort appr�ciable.';
	}
	else {
		$sortie.=', en plus d\'un mur fortifi�, poss�de de puissants h�ros fr�quement en ville et pr�ts � prendre les armes pour d�fendre des attaques ext�rieures';
		$detailporte=detailport(3);
		
	}
	$sortie.= '<br>Les '.$porte. ' portes de la ville '.$detailporte.'<br>';
	
	$j=0;
	$k=100;
	while(rand(1,100)<$k && $particu==2) {
			if ($j==0) {
				$sortie.='Etant une ville � pr�disposition militaire, '.$nomduvillage.' dispose �galement ';
				$sortie.=creerchateau($taille);
				$sortie.='<br>Et on y retrouve �galement : <br>';
			}
				$sortie.='-'.creeraddonmili().'.<br>';
				$j++;
				$k=$k-20;
	}
	
return $sortie;

}

?>