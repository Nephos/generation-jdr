<?php
include ('lib/compteur.php');
include ('lib/auberge.php');
include ('lib/nomevolue.php');

//cr�ation de l'auberge.
$fm =rand(0,1);
$qualite=rand(0,2);
$etage=rand(0,2);
$etagetexte='';
$place=rand(1,2)+$qualite;

if (isset($_GET['nom'])) 	$nom=stripslashes($_GET['nom']); // On a le nom et le pr�nom
	
else {
	$nom=creerauberge(); 					// g�n�ration du nom de l'auberge
	
}
$_GET['nom']=$nom;
$racetaball =array("Demi-elfe","Demi-orque","Elfe","Gnome","Halfelins","Humain","Nain");

$racetab1 =array(0,2,3,4,5,6);
$aidefemmn=array(" sa cousine"," sa soeur", " sa fille", " sa m�re"," sa ni�ce", " sa belle soeurs", " son a�eul", " sa femme");
$aidefemnd=array(" son amie"," une ancienne compagne d'aventure", " son amie d'enfance");
$aidemasmn =array(" son cousin"," son fr�re", " son fils", " son p�re", "son neveu", "son beau fr�re", " son a�eul", " son �poux");
$aidemasnd=array(" son ami"," un ancien compagnon d'aventure"," son ami d'enfance");


if (strstr($nom,'Chez ')) $tenancier = substr($nom,'5');
if ($qualite==0){
	$raceproprio=rand(1,count($racetaball));
	$sexeproprio=rand(1,2);
}
else {
	$raceproprio=$racetab1[rand(1,count($racetab1)-1)];
	$sexeproprio=rand(1,2);
}

$proprio=creernomevo($raceproprio,$sexeproprio);

switch (rand(0,3)) {
	case 0: //meme nom mas
	$aideprorio=$aidemasmn[rand(0,count($aidemasmn)-1)].' '.creernomsim($raceproprio,1);
	break;
	case 1: //meme nom fem
	$aideprorio=$aidefemmn[rand(0,count($aidefemmn)-1)].' '.creernomsim($raceproprio,2);
	break;
	case 2: //nom diff�rent mas
	$aideprorio=$aidemasnd[rand(0,count($aidemasnd)-1)].' '.creernomevo(rand(1,count($raceproprio)),1);
	break;
	case 3: //m$eme nom fem
	$aideprorio=$aidefemnd[rand(0,count($aidefemnd)-1)].' '.creernomevo(rand(1,count($raceproprio)),2);
	break;

}
	
$divers1 = array("qui est plut�t", "","","");

$bonplat = array(
	"\"Ours au miel\"",
	"\"Cygne aux trois poivres\"", 
	"\"Rago�t de lapin sauce verte\"",
	"\"Poulet aux pruneaux, raisins, amandes et abricots secs\"",
	"\"Potage Jaunet\"",
	"\"Civet de lapin aux �pices\"",
	"\"Agneau r�ti au sel\"",
	"\"Lapin au sirop\""
	);
	
$servicequalite = array ();
	$servicequalite[0] = array ("Un barbier, ",
	"qui risque plus d'entailler un peu la gorge que les poils",
	"qui ex�cute son travail convenablement",
	"qui peut faire n'importe quelle fantaisie dans les barbes les plus fournies"
	);
$servicequalite[1] = array (
	"Un barde, ",
	"qu'il faut payer pour qu'il se taise.",
	"qui, pour quelques pi�cettes, chante.",
	"qui entonne l'un des plus beaux chants lyriques.");
	
$servicequalite[2] = array (
	"Un magicien, ",
	"qui fait de pitoyables tours de passe-passe.",
	"qui, pour quelques pi�cettes, lance des sorts et des effets visuels.",
	"qui ex�cute de belles illusions."
	);
$servicequalite[3] = array (
	"Un palefrenier, ",
	"qui m�nera vos chevaux � l'�table.",
	"qui prendra soin des chevaux.",
	"qui soignera et nourrira les chevaux convenablement."
	);
$servicequalite[4] = array (
	"Un bain, ",
	"dans une arri�re-salle avec de l'eau froide et croupie.",
	"dans une salle commune ou dans la chambre, si possible.",
	"dans la chambre avec de l'eau � bonne temp�rature."
	);
$servicequalite[5] = array (
	"Un petit commerce,",
	"avec diff�rents objets de mauvaise qualit� mais bon march� (cordes, grappins,...).",
	"avec diff�rents objets utiles (cordes, sacs-�-dos, grappins,...).",
	"avec diff�rents objets de bonne qualit� plus chers qu'ailleurs (cordes de soies, grappins all�ger...)"
	);
$servicequalite[6] = array (
	"Des rations s�ches, ",
	"permettant de ne pas mourir de faim mais au go�t inf�me.",
	"permettant de se sustenter durant les longs voyages.",
	"permettant de bien manger m�me lors de voyages."
	);
$servicequalite[7] = array (
	"Une dame de compagnie, ",
	"peu charmante mais efficace, parfois l'envie d�passe la raison.",
	"qui sera d'autant plus conciliante si le prix est �lev�.",
	"qui est aussi agr�able � regarder qu'int�ressante pour discuter."
	);
$servicequalite[8] = array (
	"Un soigneur, ",
	"pouvant panser les blessures.",
	"pouvant lancer des sorts de soins faibles.",
	"pouvant lancer des sorts de soins, des sorts de gu�rison des maladies,..."
	);
$servicequalite[9] = array (
	"Un scribe, ",
	"qui, malgr� de nombreuses fautes, peut �crire contrats et actes de vente.",
	"capable d'�crire tout acte de vente ou contrat.",
	"qui, avec une belle calligraphie, peut �crire contrats et actes de vente."
	);
$servicequalite[10] = array (
	"Un �cuyer, ",
	"qui, logiquement, rendra les armes plus propres qu'il ne les a re�ues,... logiquement",
	"qui prendra soin des pi�ces d'armures et des armes.",
	"qui donnera une deuxi�me vie � votre �quipement."
	);
$servicequalite[11] = array (
	"Un �criteau � annonces, ",
	"o� plusieurs offres, pas toujours des plus honn�tes, y sont inscrites.",
	"o� l'on retrouve autant de demandes de services que d'offres.",
	"o� l'on retrouve les missions les plus prestigieuses et les escortes de personnes importantes"
	);
$servicequalite[12] = array (
	"Un coffre-fort, ",
	"qui cache du regard vos biens, pour leur s�curit�, il faudra trouver autre chose.",
	"qui permet de mettre � l'abri les biens pr�cieux.",
	"qui prot�ge autant m�caniquement que magiquement vos biens."
	);
$servicequalite[13] = array (
	"Une salle de r�ception, ",
	"plut�t miteuse mais pour le prix...",
	"assez grande pour organiser mariages et autres festivit�s.",
	"grande, confortable et bien agenc�e."
	);

$nbrservice=rand(2,3)+$etage-1+$qualite;

$mauvaisplat = array (
	"une tourte au mouton",
	"une omelette � la sauce grise et ses cro�tons",
	"un cake aux carottes",
	"un ragoudabats"
	);

if ($fm==0) $type = $nommascu=array ("e auberge","e r�sidence","e taverne","e habitation");
else $type=array (" �tablissement");

if ($fm==0) $qualif = array ("de qualit� m�diocre","de qualit� moyenne","r�put�e");
else $qualif = array ("m�diocre","moyen","r�put�");




$forme=array("en forme de H","en forme de U","en forme de L","de forme rectangulaire");

if($qualite==2 && $etage<2) $etage=$etage+1;

if ($etage==0) $etagetexte='unique rez-de-chauss�e';
else if ($etage==1) $etagetexte='rez-de-chauss�e et d\'un �tage';
else $etagetexte='rez-de-chauss�e et de deux �tages';

$dispo=array("Sur le c�t�, ","Derri�re, ","A l'arri�re, ","Dans le fond, ");

$perso0 = array (
	"individus peu fr�quentables" , 
	"brigands de bas-�tage",
	"malandrins pr�ts � en d�coudre",
	"des engeances de la ville",
	"gens de mauvaise vie",
	"personnages � la r�putation plus que douteuse",
	"mercenaires qui, pour quelques pi�ces d'or, acceptent tout contrat",
	"ivrognes qui oublient leurs soucis dans la bouteille",
	"exclus de la soci�t�",
	"receleurs fourguant leur camelotte",
	"femmes au physique disgracieux cherchant de la compagnie"
	);
	
$perso1 = array (
	"gardes de la ville apr�s leur service",
	"marchands � la recherche de fortune", 
	"aventuriers qui cherchent du travail",
	"voyageurs cherchant une escorte",
	"h�ros en qu�te d'aventures",
	"jeunes femmes cherchant bonne compagnie",
	);
	
$perso2 = array (
	"nobles et des nantis n'ayant d'autre occupation que de se d�tendre",
	"riches marchands se reposant avant de repartir",
	"h�ros ayant fait fortune et coulant des jours heureux",
	"nobles",
	"veuves fortun�es cherchant de la compagnie"
	);

$debut = array (
	"Les rencontres les plus fr�quentes dans cette auberge sont des ",
	"Dans cette auberge, on peut rencontrer des ",
	"Dans cet �tablissement viennent souvent des ",
	"L'on y rencontre souvent des ",
	"Il est fr�quent de croiser le chemin de ",
	"La client�le pr�sente est principalement compos�e de ",
	"Cette auberge est principalement fr�quent�e par des "
	);	
	
$objet0sin = array (
	"Un bar en ch�ne rong� par les champignons ",
	"Le trou b�ant par lequel le vent s'engouffre ",
	"La chemin�e compl�tement bouch�e par la suie "
	);

$objet0plr = array (
	"Des rats sortant de la cuisine ",
	"Des odeurs d'urines m�lang�es � de vagues relants de cuisine ",
	"Des d�bris de mobiliers t�moignant des nombreuses bagarres "
	);

$objet1plr = array (
	"Les murs propres et lisses, ",
	"Les murs en bon �tat et blanchis � la chaux ",
	
);

$objet1sin = array (
	"Le mur de gauche, noirci, tend � faire penser qu'un incendie s'est d�clar� il y a peu et ",
	"La belle chemin�e en pierre"
);

$objet2plr = array (
	"De belles poutres apparentes ",
	"Des boiseries finement cisel�es ",
	"Les tables et les chaises en bois exotique ",
);

$objet2sin = array (
	"Un sol aux pierres parfaitement taill�es ",
	"L'imposante chemin�e de granit poli ",
	"Le comptoir sculpt� dans de la pierre bleue "
	);

$lieu0 = array (
	"des docks, permet aux marins inactifs d'�tre des clients assidus.",
	"du port, laisse une odeur permanente de poisson.",
	"des bas-quartiers, rend cet �tablissement peu fr�quentable.",
	"d'un temple d'une divinit� mauvaise, am�ne parfois � c�toyer de dr�les de religieux.",
	"des quartiers de la populace, ne permet pas d'�lever le niveau de l'�tablissement."
);
$lieu1 = array (
	"des quartiers du peuple donne une ambiance correct sans fioriture.",
	"des docks, permet aux capitaines de vaisseaux de s'y restaurer.",
	"d'un temple d'une divinit� bonne, am�ne souvent de braves gens.",
	"de la place du march�, donne � cet �tablissement une ambiance festive."
);
$lieu2 = array (
	"des riches quartiers marchands, rend souvent ais� la n�gociation de contrats.",
	"de l'h�tel de ville, permet d'y rencontrer souvent les notables.", 
	"de la tour d'un magicien renomm�, semble attirer bon nombre de voyageurs.", 
	"de la maison d'un h�ros d'antan, am�ne celui-ci � y passer parfois pour raconter ses aventures.",
	"d'une route fortement fr�quent�e, permet � l'�tablissement d'�tre toujours bond�."
);

$construction0 = array (
	", celui-ci ne tient que par habitude. ",
	", celui-ci a sans doute �t� construit par un manchot. ",
	", celui-ci semble avoir subi les ravages de la guerre. ",
	", celui-ci laisse entrevoir le ciel en de nombreux endroits. ",
	", la toiture semble ne plus beaucoup tenir. "

);

$construction1 = array (
	", la construction est correcte. ",
	", le b�timent est de bonne facture. ",
	", la pi�ce principale a �t� r�cemment r�nov�e. ",
	", la toiture est en parfait �tat. "
);

$construction2 = array (
	", la b�tisse t�moigne d'un excellent savoir-faire. ",
	", celui-ci est id�alement situ� au coeur de la ville. ",
	", l'architecture de la maison est tr�s recherch�e. ",
	", � la vue de sa robustesse, on se dit qu'il doit �tre de construction nanique. ",
	
);

//cr�ation du texte l'auberge.
compteur('aubergedetail');
$output='';
$output.='<h2>'.$nom.'</h2>';
$output.=$nom.' est un'.$type[rand(0,count($nom)-1)]." ".$divers1[rand(0,count($divers1)-1)]." ".$qualif[$qualite];

if($fm==0) $output.=" tenue par ";
else $output.=" tenu par ";

if (empty($tenancier)) $output.=$proprio;
else $output.=$tenancier;

if (rand(1,100)<60){
	$output.=" et ";
	$output.=$aideprorio;
}

$output.=".<br/><br/> Le b�timent ".$forme[rand(0,count($forme)-1)]." est compos� d'un ".$etagetexte;

if ($qualite==0) $output.= $construction0[rand(0,count($construction0)-1)];
else if ($qualite==1) $output.=$construction1[rand(0,count($construction1)-1)];
else $output.=$construction2[rand(0,count($construction2)-1)];

if ($etage==0) $output.="A l'int�rieur, ";
else $output.="Au rez-de-chauss�e, "; 
$output.="se trouve une salle pouvant contenir ";
if (rand(0,5)==1) $output.=' au maximum ';
$output.=$place."0 personnes. ";


if (rand(1,100)<50){
	
	$plu=rand(0,1);
	if ($qualite==0) {
		if (rand(0,1)==0) $output.=$objet0sin[rand(0,count($objet0sin)-1)];
		else $output.=$objet0plr[rand(0,count($objet0plr)-1)];
	}
	else if ($qualite==1) {
		if ($plu==0) $output.=$objet1sin[rand(0,count($objet1sin)-1)];
		else $output.=$objet1plr[rand(0,count($objet1plr)-1)];
	}
	else {
		if ($plu==0) $output.=$objet2sin[rand(0,count($objet2sin)-1)];
		else $output.=$objet2plr[rand(0,count($objet2plr)-1)];
	}
$verbe = array (
	"donne une id�e de ",
	"d�montre ",
	"illustre ",
	"atteste de ",
	"r�v�le ",
	"t�moigne de "
	);
$verbes =array (
	"donnent une id�e de ",
	"d�montrent ",
	"illustrent ",
	"attestent de ",
	"r�v�lent ",
	"t�moignent de "
);
if ($plu==0) $output.=$verbe[rand(0,count($verbe)-1)]. "la qualit� de l'auberge. ";
else $output.=$verbes[rand(0,count($verbes)-1)]. " la qualit� de l'auberge. ";

}
$sexe=rand(1,2);
$output.=$dispo[rand(0,count($dispo)-1)].'se situe la cuisine o� '.creernomevo(0,$sexe). " est au fourneau. ";
if ($sexe==1) $output.="Le "; else $output.='La ';
if ($qualite==0) $output.='cuistot pr�pare '.$mauvaisplat[rand(0,count($mauvaisplat)-1)].' qu\'il est fort d�conseill� de manger.<br/>';
else if ($qualite==1) $output.='cuistot n\'a pas de recette favorite la cuisine y est correct.<br/>';
else $output.='cuistot se targue de faire le meilleur '.$bonplat[rand(0,count($bonplat)-1)].' de toute la r�gion.<br/>';

if (rand(1,100)<50){
	if ($qualite==0) $output.="Devant l'�tablissement, deux malheureux tabourets font office de terrasse. ";
	else if ($qualite==1) $output.="Au devant de l'auberge, quelques tables et chaises permettent de prendre un verre � l'ext�rieur. ";
	else $output.="Devant l'�tablissement, install�es sur du parquet, de belles tables et chaises permettent de se restaurer en contemplant le paysage. ";
}

if ($etage>=1) {
	$output.="<br>A l'�tage se trouvent les chambres, ";
	$etage1chambre=rand(2,4);
	if ($qualite==0)$output.=$etage1chambre." chambres o� l'on partage sa paillasse avec les puces, sans verrou aux portes.";
	else if ($qualite==1)$output.=$etage1chambre." chambres avec un minimum de commodit�, avec un verrou qui permet de fermer la porte.";
	else $output.=$etage1chambre." chambres joliment d�cor�es avec la possibilit� d'y prendre un bain.";
	$totalchambre=$etage1chambre;
}

if ($etage==2) {
	$output.="<br/>Au deuxi�me �tage se trouve ";
	
	if ($qualite==0){
		$etage2chambre=0;
		$output.=" un dortoir commun o� tout un chacun peut entrer et sortir et o� un coffre au pied du lit fait office d'armoire.";
	}
	else if ($qualite==1){
		$etage2chambre=rand(2,3);
		$output.=$etage2chambre." autres chambres plus spacieuses pouvant accueillir un couple, la porte se ferme avec un verrou solide.";
	}
	else {
		$etage2chambre=rand(2,3);
		$output.=$etage2chambre." autres chambres richement d�cor�es, avec bureau, armoire solide et diverses d�corations murales.";
	}
	$totalchambre=$etage1chambre+$etage2chambre;
}
if ($nbrservice==1) $output.="<br/>Il est seulement possible d'avoir le service suivant dans cet �tablissement : <br/>";
else $output.="<br/>Il est possible de b�n�ficier des ".$nbrservice." services suivants dans cet �tablissement : <br/>";

if ($etage>0) {
	$output.="-Chambre, <i>";
	if ($qualite==0){
		if ($etage==1) $output.=$totalchambre ." mis�rables pi�ces";
		else if ($etage==2) $output.=$totalchambre ." mis�rables pi�ces et un dortoir tout aussi triste"; 	
	}
	else if ($qualite==1)$output.=$totalchambre." pi�ces avec des commodit�s agr�ables";
	else $output.=$totalchambre." salles spacieuses et soign�es";
	$output.='.</i><br/>';	
	$nbrservice=$nbrservice-1;
}
for ($i = 0; $i < $nbrservice; $i++) {
	$element=rand(0,count($servicequalite)-1);
	$output.="-".$servicequalite[$element][0].'<i>'.$servicequalite[$element][$qualite+1]."</i><br/>";
	unset($servicequalite[$element]);
	$servicequalite = array_values($servicequalite);
	
}
$output.='<br/>'.$debut[rand(0,count($debut)-1)];

	if ($qualite==0) $output.=$perso0[rand(0,count($perso0)-1)];
	else if ($qualite==1) $output.=$perso1[rand(0,count($perso1)-1)];
	else $output.=$perso2[rand(0,count($perso2)-1)];

$output.=', de plus la proximit� ';
	if ($qualite==0) $output.=$lieu0[rand(0,count($lieu0)-1)];
	else if ($qualite==1) $output.=$lieu1[rand(0,count($lieu1)-1)];
	else $output.=$lieu2[rand(0,count($lieu2)-1)];

//affichage de l'auberge
	$output.= '	<form method="get" onsubmit="return valid();" action="index.php?page=aubergedetail">';		
	foreach ($_GET as $key=>$val){			
	$output.= "<input type='hidden' name='".$key."' value=\"".$val."\"'>";		}	
	
	$output.= '<input type="submit" name="genere" value="G�n�rer la m�me auberge" />';	$output.= '<input type="button" value="G�n�rer une autre auberge"  OnClick="window.location.href='."'index.php?page=aubergedetail'".'"></form>';		
	echo $output;

?>