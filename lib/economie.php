<?php

function appeleconomie($economie,$nomduvillage,$particu,$Capfi){
	
	$listeexportfaible= array('de la pierre','du porc','des chevaux','des esclaves','du boeuf','du charbon','des herbes','du b�tail','des armes','des produits en cuir','des olives','du sel','du tissus','des minerais de fer',' de la laine','de la bi�re','du fromage','des fourrures','du th�','des fruits','des betterave sucriaires','des graines','du bois');
	$listeexportmoyen= array ('des herbes-�-pipe','des herbes rares','de la soie','du vin','du caf�','du porc','des chevaux','des esclaves','du boeuf','du charbon','des herbes','des herbes m�dicinales','du b�tail','des armes','des armes de qualit� sup�rieure','des v�tements','des produits en cuir','des l�gumes','des tissus','du fer','de l\'huile d\'olive','des tapis','de la bi�re','du fromage','des minerais d\'argent','des fourrures','de l\'ivoire','du th�','des fruits','du sucre','des fournitures de caravanes','du cuivre','des graines','des poteries','du bois');
	$listeexportfort= array ('de l\'encens','de  la soie','du vin','des livres','du caf�','du porc','des chevaux','des chevaux pur-sang','des objets magiques','du parfum','des esclaves','du boeuf','des herbes','des herbes m�dicinales','du b�tail','des perles','des armes','des armes de qualit� sup�rieure','des objets d\'art','des v�tements','des v�tements d\'apparat','de l\'or','du verre','des produits en cuir','des produits en cuir d\'excellente qualit�','des l�gumes','du tissu','du fer','des gemmes','des bijoux','de l\'huile d\'olive','des �pices','des tapis','de la bi�re','du fromage','de l\'argent','des fourrures','de l\'ivoire','du th�','des fruits','des fournitures de caravanes','du cuivre','des graines','des poteries','du bois pr�cieux');
	$listeexportmaritimefull= array ('de l\'huile de baleine','des fruits de mer','des perles','des fournitures de navires','du sel','des cordages','des navires');
	$listeexportmaritimefaible = array ('des fournitures de navires','du sel','des cordages','des navires (barque et chaloupe)');
	$listeutile=array();
	
	$enplus=$sortie='';
	$sortie.='<br><br><h4>Economie</h4>';
	$sortie.='L\'�conomie de '.$nomduvillage.' est ';
	if($economie<=10) {
		$sortie.='faible';
		$listeutile=$listeexportfaible;
		if($particu==1) array_merge($listeutile,$listeexportmaritimefaible);
		$enplus='malgr� tout ';
	}
	else if ($economie<=15) {
		$sortie.='moyenne';
		$listeutile=$listeexportmoyen;
		if($particu==1) array_merge($listeutile,$listeexportmaritimefull);
	}
	else {
		$sortie.='elev�e';
		$listeutile=$listeexportfort;
		if($particu==1) array_merge($listeutile,$listeexportmaritimefull);
	}
	$sortie.=', avec un capital global de '.$Capfi.' PO';
	$sortie.='<br>On retrouve '.$enplus.'les denr�es suivantes � l\'exportation : <br>';
	for($i=0;$i<$economie;$i++){
		$element =$listeutile[rand(0,count($listeutile)-1)];
		unset($listeutile[array_search($element, $listeutile)]);
		$listeutile = array_values($listeutile);
		$sortie.=' - '.$element;
	}
	if($particu==1) {
		if ($economie<10) $sortie.='- '.$listeexportmaritimefaible[rand(0,count($listeexportmaritimefaible)-1)];
		else $sortie.='- '.$listeexportmaritimefull[rand(0,count($listeexportmaritimefull)-1)];
	}

return $sortie;

}

?>