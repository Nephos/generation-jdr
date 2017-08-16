<?php
function creerchateau($taille){ 
		$taille1 = array ("d'un abri fortifi�","d'un refuge fortifi�","d'une habitation fortifi�e","d'une maison fortifi�e","d'une demeure fortifi�e","d'une r�sidence fortifi�e","d'un manoir fortifi�", );
		$taille2 = array ("d'un abri fortifi�","d'un refuge fortifi�","d'une habitation fortifi�e","d'une maison fortifi�e","d'une demeure fortifi�e","d'une r�sidence fortifi�e","d'un manoir fortifi�","d'un palais fortifi�","d'un donjon");
		$taille3 = array ("d'un abri fortifi�","d'un refuge fortifi�","d'une habitation fortifi�e","d'une maison fortifi�e","d'une demeure fortifi�e","d'une r�sidence fortifi�e","d'un manoir fortifi�","d'un palais fortifi�","d'un donjon","d'une tour","d'une bastille","d'une place-forte");
		$taille4 = array ("d'une habitation fortifi�e","d'une maison fortifi�e","d'une emeure fortifi�e","d'une r�sidence fortifi�e","d'un manoir fortifi�","d'un palais fortifi�","d'un donjon","d'un ch�telet","d'une tour","d'une bastille");
		$taille5 = array ("d'un manoir fortifi�","d'un palais fortifi�","d'un ch�telet","d'un donjon","d'une tour","d'une bastille","d'une place-forte","d'un fortin","d'un fort");
		$taille6 = array ("d'un donjon","d'une tour","d'une bastille","d'une place-forte","d'un ch�telet","d'un fortin","d'un fort","d'une forteresse");
		$taille7 = array ("d'une tour","d'une bastille","d'une place-forte","d'un fortin","d'un ch�telet","d'un fort","d'une forteresse","d'un ch�teau","d'une citadelle");
		$taille8 = array ("d'une bastille","d'une place-forte","d'un fortin","d'un fort","d'une forteresse","d'un ch�teau","d'une citadelle");
		$deterioration = array("");
		$amelioration = array (
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Ouverture longue et �troite dans un mur pour tirer � l'arc ou � l'arbal�te\">Arch�re</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Ouverture d�fendant g�n�ralement une porte permettant de jeter des projectiles verticalement.\">Assommoir</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Ouvrage fortifi� avanc�, servant � d�fendre la porte d'une ville ou d'un ch�teau.\">Barbacane</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Cour ext�rieure prot�g�e par les murailles d'un ch�teau.\">Basse-Cour</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Ouvrage avanc� � deux flancs et deux faces faisant saillie, plac� g�n�ralement sur l'enceinte d'un ch�teau. Apparu au milieu du XVI �me si�cle en Italie.\">Bastion</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Parement de pierre formant une bosse plus ou moins saillante par rapport � ses ar�tes.\">Bossage</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Logette � m�chicoulis faisant saillie, utilis�e comme ouvrage de d�fense qui surplombe, dans la plupart des cas, une ouverture.\">Bret�che</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Emplacement situ� dans le flanc d'une place-forte pour d�fendre le foss�. La casemate n'est g�n�ralement pas reli�e au reste du ch�teau.\">Casemate</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Chemin au sommet des murs, souvent prot�g� par un parapet.\">Chemin de ronde</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Muraille enveloppant une tour ou quelque �difice fortifi�.\">Chemise</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"El�ment encastr� en saillie sur un mur pour supporter un encorbellement. Les corbeaux �taient soit en bois, soit en pierre (appel�s alors consoles)\">Corbeau</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"El�ment de muraille reliant deux bastions ou deux tours flanquantes.\">Courtine</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Ouverture pratiqu�e dans le parapet d�fensif.\">Cr�neau</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Tour ma�tresse d'un ch�teau fort m�di�val, parfois demeure du seigneur du ch�teau.\">Donjon</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Foss� parfois rempli d'eau entourant le ch�teau.\">Douves</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Gu�rite plac�e en surplomb sur une muraille fortifi�e ou une tour.\">Echauguette</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Tourelle surmontant l'escalier d'acc�s au sommet d'une tour.\">Guette</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Grille de fer ou de bois coulissant de haut en bas.\">Herse</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Galerie de bois �tablie en surplomb autour du sommet des murs d'un ch�teau.\">Hourd</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Palissade de bois entourant les ch�teaux ou les sites fortifi�s.\">Lice</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Construction en surplomb des remparts permettant de jeter des projectiles verticalement.\">M�chicoulis</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Partie pleine d'un rempart entre deux cr�neaux.\">Merlon</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Ouverture �troite pratiqu�e dans le mur d'un ouvrage fortifi� pour permettre l'observation et l'envoi de projectiles.\">Meurtri�re</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Sortes de petites casemates ext�rieures situ�es dans le foss� et accol�es � l'escarpe\">Moineau</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Fosses, ou cachots souterrains dans lesquels les prisonniers sont \"oubli�s\" jusqu'� leur mort.\">Oubliettes</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Face visible du mur fait de pierres de taille\">Parement</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Gu�rite en ma�onnerie ainsi nomm�e � cause de sa forme ronde au toit conique.\">Poivri�re</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Pont mobile au dessus d'un foss�, dont le tablier se rel�ve pour fermer l'acc�s au ch�teau.\">Pont-levis</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Petite porte d�rob�e qui servait � fuir ou � faire entrer des renforts � l'insu des assi�geants.\">Poterne</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Petit ouvrage de fortification isol� et ferm�.\">Redoute</span>",
			"<span style=\"border-bottom: 1px black dotted;\" title=\"Tour permettant d'effectuer des tirs parall�les au mur � d�fendre.\">Tour flanquante</span>"
		);
		$listechateau = array ();
		switch ($taille){
		case 1:
			$listechateau=$taille1;
		break;
		case 2:
			$listechateau=$taille2;
		break;
		case 3:
			$listechateau=$taille3;
		break;
		case 4:
			$listechateau=$taille4;
		break;
		case 5:
			$listechateau=$taille5;
		break;
		case 6:
			$listechateau=$taille6;
		break;
		case 7:
			$listechateau=$taille7;
		break;
		case 8:
			$listechateau=$taille8;
		break;
		}
		
		$chateau=$listechateau[rand(0,count($listechateau)-1)];
		if ($taille>6) {
		$l=100;
		$ameliorations = array();
			while (rand(1,100)<$l) {
				$choix = rand(0,count($amelioration)-1);
				$ameliorations[strtolower($amelioration[$choix])] = $amelioration[$choix];
				unset($amelioration[$choix]);
				$amelioration = array_values($amelioration);
				$l=$l-5;
			}
			if (count($ameliorations) > 0){
				$chateau.=' avec '.implode(", ", $ameliorations);
			}
		}	



	
	return  $chateau;
}
function creeraddonmili(){ 
	$addon = array (
		"Un ma�tre d'armes",
		"Un bretteur hors pair",
		"Une guilde de guerriers",
		"Un centre d'entra�nement militaire",
		"Un armurier de renom",
		"Une forge fabricant des armes proches de la perfection", 
		"Une ancien chef militaire ayant gagn� de grandes guerres",
		"Un combattant utilisant des armes particuli�res que peu connaissent",
		"Une academie militaire formant de bons combattants",
		"Une fabrique de balistes",
		"Une forge de renom",
		"Un tournois d'�p�istes connu de part le monde", 
		"Un tournois d'archerie connu de part le monde",
		"Un tournois de cavalerie connu de part le monde", 
		"Un festival de joutes diverses o� chacun peut prouver sa bravoure",
		"Une joute �questre",
		"Un facteur d'arcs reconnu pour ses cr�ations",
		"Un forgeron reconnu pour ses cr�ations",
		);
	return $addon[rand(0,count($addon)-1)];
	}
?>