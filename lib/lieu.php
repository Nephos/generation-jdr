<?php
function creerlieu(){ 
	
$lieu = array("Une fontaine","Un parc","Un lac","Une statue","Un �difice comm�moratif","Un pont","Une tour abandon�e","Un jardin","Un bosquet","Une place","Une maison biscornue","Une maison �trange");
	
	$sortie='';
	$sortie.=$lieu[rand(0,count($lieu)-1)];
	
	
	
	
return $sortie;
}



?>



