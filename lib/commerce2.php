<?php

function appelcommerce($nbrbat,$nbrguilde,$nbraventuriers,$nbrheros,$aventurier,$nomduvillage){
	
	include_once ('commerce.php');
	
	$sortie='';
	$sortie.='<br><br><h4>Commerces, guildes et autres</h4>';
	if ($nbrbat==0) $sortie.='<Il n\'y a aucun commerce qui vaille qu\'on s\'y attarde. <br>';
	else if ($nbrbat==1) $sortie.='Il existe un seul commerce remarquable (<a href="#bouton_texte3">voir le commerce</a>). <br>';
		else $sortie.='Il existe dans '.$nomduvillage.', '.$nbrbat.' commerces remarquables (<a href="#bouton_texte3">voir la liste des commerces</a>). <br>';	
		//guildes
	if ($nbrguilde>0) {
		if ($nbrguilde==1) $sortie.='Il existe �galement une guilde (<a href="#bouton_texte2">voir la guilde</a>). <br>';
		else $sortie.=$nomduvillage.', poss�de �galement '.$nbrguilde.' guildes (<a href="#bouton_texte2">voir la liste des guildes</a>). <br>';
	}
	if ($nbraventuriers>0) {
		if ($nbraventuriers==1) $sortie.=$nomduvillage.' comporte en son sein un aventurier (<a href="#bouton_texte5">voir l\'aventurier</a>). <br>';
		else $sortie.=$nomduvillage.' comporte �galement dans ses habitants '.$nbraventuriers.' aventuriers (<a href="#bouton_texte5">voir la liste des aventuriers</a>). <br>';
	}
	if($nbrheros>0) {
		if ($nbrheros==1) $sortie.='La ville a, de plus, la chance de compter parmis ses habitants un h�ro ayant accompli quelque chose d\'exeptionnel pour la ville ou ayant d�cid� de prendre sa retraite � '.$nomduvillage.' (<a href="#bouton_texte6">voir le h�ro</a>). <br>';
		else $sortie.=$nomduvillage.' a le privil�ge d\'avoir parmi ses habitants '.$nbrheros.' h�ros ayant accompli quelque chose d\'exeptionnel pour la ville ou ayant d�cid� de prendre leur retraite (<a href="#bouton_texte6">voir la liste des h�ros</a>). <br>';
	}
return $sortie;

}

?>