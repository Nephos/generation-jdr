<?php

function detailport($i){

	$detailportefaible=array(
		"sont souvent laiss�es sans protection.",
		"ne tiennent plus que part un gond",
		"tomberaient si un enfant venait � s'appuyer dessus",
		"ne tiennent que par habitude",
		"ne sont jamais gard�es",
		"laissent passer le vent tout autant que les malfrats",
		"devaient �tre belles"
	);
	$detailportemoyen=array(
		"ne sont jamais laiss�es sans protection.",
		"ne sont jamais laiss�e sans protection et la milice tourne jour et nuit.",
		"sont fait de bois solide et de renfort m�talique.",
		"sont renforc�es et offrent une bonne protection"
	);
	$detailportehaut=array(
		"peuvent �tre ferm�es rapidement avec une herse et une porte de bois massive renforc�e de m�tal",
		"sont en bois solide et poss�dent des meurtrieres",
		"se ferme magiquement sous un simple mot de commande",
		"on d�j� r�sist� � bon nombre d'essai d'intrusion et encore personne ne les a franchit de force."
	);

if ($i==1) $sortie=$detailportefaible[rand(0,count($detailportefaible)-1)];
else if ($i==2) $sortie=$detailportemoyen[rand(0,count($detailportemoyen)-1)];
else $sortie=$detailportehaut[rand(0,count($detailportehaut)-1)];

return $sortie;

}
?>