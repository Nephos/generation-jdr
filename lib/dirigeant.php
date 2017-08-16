<?php

function appeldirigeant($dirigeant,$nbrdirigeant,$typevillenum){
	include_once ('nomevolue.php');

	$typedirigeanttradisolo=array('un maire','un noble','un aventurier � la retraite','un riche marchand','un pr�tre de faible puissance','un mage de faible puissance','un troubadour','un membre des m�nestrels','un officier','un commandant','un s�n�chal','un baron','un compte','un grand-duc','un marquis','un duc');
	$typedirigeanttradimulti=array("un conseil municipal","un ensemble de marchands","un ensemble de pr�tres de diff�rents cultes de la nature"," un groupe d\'aventuriers � la retraite","un ensemble de pr�tres de confession bienveillante");
	$typedirigeantinhabsolo=array('une guilde de voleurs','une guilde de marchands','une guilde d\'artisans','une guilde d\'assassins','une guilde de mercenaires');
	$typedirigeantinhabmulti=array('une guilde de voleurs','une guilde de marchands','une guilde d\'artisans','une guilde d\'assassins','une guilde de mercenaires');
	$typedirigeantinmagsolo=array('un mage isol� puissant','un mage isol� tr�s puissant et versatile','un ensorceleur versatile','un chaman au charisme extraordinaire','un pr�te ayant une foi in�branlable');
	$typedirigeantinmagmulti=array('un conseil de mages','un temple de confession bonne','un ordre religieux extr�miste','un ordre religieux totalitaire');
	$monstrueux=array("un magicien ayant pactis� avec un d�mon afin de ne plus veillir","un doppelg�nger usurpant l'identit� du vrai dirigeant","un pion au services d'une organisation","un pion devant rendre des comptes � une cr�ature puissantes (dragon, d�mon,...)","dirig� par un flageleur mental qui s'amuse");
	$pasorkpasgob = array (1,3,4,6,7,8);
	
	$sortie='';
	$sortie.='<br><h4>Dirigeant(s)</h4>';
	$sortie.='La ville est dirig�e  par ';
	if ($dirigeant<=13) { 
		if ($nbrdirigeant==1) {
			if (rand(1,100)>5) {
				$sortie.=$typedirigeanttradisolo[rand(0,count($typedirigeanttradisolo)-1)];
				if ($typevillenum==0) $sortie.=' portant le nom de '.creernomevo(7,rand(0,1));
				else if ($typevillenum==1) $sortie.=' portant le nom de '.creernomevo($pasorkpasgob[rand(0,6)],rand(0,1)).'.';
				else $sortie.=' portant le nom de '.creernomevo(rand(1,8),rand(0,1));
			}
			else {
				$sortie.=$typedirigeanttradisolo[rand(0,count($typedirigeanttradisolo)-1)]. ' mais qui est en r�alit� ';
				if (rand(1,100)>5) $sortie.=$typedirigeanttradimulti[rand(0,count($typedirigeanttradimulti)-1)];
				else $sortie.=$typedirigeanttradimulti[rand(0,count($typedirigeanttradimulti)-1)]. ' rajouter monstrueux';
			}		
		}
	}
	else if ($dirigeant<=18)  {
		if ($nbrdirigeant==1) {
			$sortie.=$typedirigeanttradisolo[rand(0,count($typedirigeanttradisolo)-1)].' mais lui-m�me � la solde d\'';
			if(rand(0,1)==0) {
				$sortie.=$typedirigeantinhabsolo[rand(0,count($typedirigeantinhabsolo)-1)];
				if(rand(0,1)==0) $sortie.=" et ce, contre son gr�.";
				else $sortie.=" en retour d'un confort financier.";
			}
			else 
				$sortie.=$typedirigeantinhabmulti[rand(0,count($typedirigeantinhabmulti)-1)];
		}
		else { 
			$sortie.=$typedirigeanttradimulti[rand(0,count($typedirigeanttradimulti)-1)].' mais lui-m�me � la solde d\'';
			if(rand(0,1)==0) 
				$sortie.=$typedirigeantinhabsolo[rand(0,count($typedirigeantinhabsolo)-1)];
			else 
				$sortie.=$typedirigeantinhabmulti[rand(0,count($typedirigeantinhabmulti)-1)];
		}
	}
	else if(rand(0,1)==0)  	{
		$sortie.=$typedirigeantinmagsolo[rand(0,count($typedirigeantinmagsolo)-1)];
		if ($typevillenum==0) $sortie.=' portant le nom de '.creernomevo(7,rand(0,1));
		else if ($typevillenum==1) $sortie.=' portant le nom de '.creernomevo($pasorkpasgob[rand(0,6)],rand(0,1)).'.';
		else $sortie.=' portant le nom de '.creernomevo(rand(1,8),rand(0,1));
		}
		else $sortie.=$typedirigeantinmagmulti[rand(0,count($typedirigeantinmagmulti)-1)];
	
	
	

return $sortie;

}

?>