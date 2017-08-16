<?php

function creerscenar(){
		$autre = array("une potion","un lieu hant�","une arme","une grotte","un bijou","l'antre d'un monstre","un ch�teau","une oeuvre d'art","un bateau","un artefact","un temple","un animal","un grimoire","un mar�cage","un poison","une mine","de la nourriture","un village","un outil artistique","un lieu magique");
		
		$demandeur = array (
			"un glorieux champion du Bien",
			"un membre de la famille ou un ami",
			"un marchand honn�te",
			"le leader d'une bande d'aventuriers",
			"un ma�tre de guilde amicale",
			"le mentor de l'un des PJs",
			"le conseiller du seigneur local",
			"un puissant magicien",
			"un h�ros renomm�",
			"le capitaine de la garde",
			"un religieux respectable",
			"un noble de haute estime",
			"un mercenaire myst�rieux",
			"un membre corrompu de l'entourage du seigneur local",
			"un chevalier � la retraire",
			"un simple paysan",
			"un ermite submerg� par les probl�mes",
			"un courtisan/ une courtisane",
			"un ami des PJs",
			"une fille de plaisir",
			"un pr�tre bon",
			"un seigneur local");
			
		$soupcon = array (
			"d'un pr�tre mauvais",
			"d'un puissant sorcier mal�fique",
			"d'un illustre d�mon",
			"d'un monstre",
			"d'un dangereux n�cromant/d�moniste",
			"d'un guerrier tristement c�l�bre et malfaisant",
			"de l'ex-capitaine de la garde rancunier",
			"d'un pr�tre mal�fique",
			"d'un noble mal intentionn�",
			"d'un marchand peu scrupuleux",
			"du gourou d'une secte",
			"d'un ma�tre de guilde corrompu",
			"d'un criminel sans scrupule",
			"du n�m�sis de l'un des PJs",		
			"d'un mercenaire myst�rieux",
			"d'un dragon en maraude",
			"d'un escroc/roublard discret mais habile");
		
		$evenement = array(
			"les vestiges d'une c�r�monie d�moniaque ont �t� d�couverts",
			"de nombreuses personnes disparaissent",
			"un lieu sacr� a �t� profan�",
			"un incendie s'est d�clar�",
			"des monstres locaux se font plus nombreux",
			"des pauvres sont assassin�s/massacr�s",
			"des convois disparaissent",
			"des faits inexpliqu�s se manifestent",
			"un innocent est accus� d'un crime qu'il n'a pas commis",
			"le climat devient tr�s inhabituel pour la saison",
			"une carte aux tr�sors a �t� d�couverte",
			"une arm�e se rassemble",
			"un individu important a �t� enlev�",
			"une puissante cr�ature a �t� lib�r�e",
			"une puissante cr�ature a �t� invoqu�e",
			"une �pid�mie se d�clare",
			"une s�rie de cambriolages a eu lieu",
			"les morts quittent leur repos �ternel et attaquent les environs",
			"un incendie s'est d�clar�, mena�ant fermes et for�ts",
			"les brigands se font de plus en plus mena�ants",
			"des riches/nobles meurent myst�rieusement",
			"des ph�nom�nes magiques sont apparus � proximit�",
			"une mission diplomatique s'est faite attaquer alors qu'elle �tait envoy�e dans un pays voisin",
			"un portail vers une autre dimension a �t� ouvert",
			"un objet rare/pr�cieux/unique doit �tre retrouv�",
			"une guerre civile s'est d�clar�e",
			"un criminel/ennemi s'est �chapp�",
			"un puissant monstre d�vaste les environs",
			"une �trange porte a �t� d�couverte");
			
		$lieu = array (
			"de l'endroit o� s'est d�roul� la pr�c�dente aventure, ",
			"d'une grande ville, ",
			"des bourgs d'une grande ville, ",
			"d'un village,", 
			"d'une petite ville, ",
			"d'un hameau et des fermes alentours, ",
			"d'une route marchande, ",
			"d'un col montagneux, ",
			"d'une taverne, ",
			"du quartier malfam� de la ville, ",
			"du QG actuel des PJs, ",
			"du QG local d'une guilde, ",
			"du QG local d'une organisation, ",
			"d'un grand temple, ",
			"de la demeure du seigneur local, ",
			"d'une demeure abritant un magicien, ",
			"d'un temple abandonn�, ",
			"d'un temple d�sacralis�, ",
			"des �gouts d'une grande ville, ",
			"des s�pultures d'une famille noble, ",
			"du cimeti�re local, ",
			"des �tendues sauvages � la fronti�re du pays, ",
			"d'un bois sauvage et peu explor�, ",
			"des profondeurs d'une ancienne for�t, ",
			"des marais et mar�cages locaux, ",
			"d'une caverne ou une ancienne mine, ",
			"des ruines d'une abbaye, ",
			"des ruines d'un ch�teau, ",
			"des ruines d'une ville oubli�e, ",
			"des vestiges d'une temple mal�fique, "
			);
		$first = array (
			"Proche ",
			"A proximit� ",
			"Aux alentours ",
			"Tout autour ",
			"Pas loin ",
			"Pr�s "		
			);

		
		$scenar='';
		$scenar.=$first[rand(0,count($first)-1)].''.$lieu [rand(0,count($lieu )-1)].' '.$evenement[rand(0,count($evenement)-1)].'. Les joueurs sont appel�s par '.$demandeur[rand(0,count($demandeur)-1)].' qui pense savoir que c\'est l\'oeuvre '.$soupcon[rand(0,count($soupcon)-1)].'.';
		//$scenar.=count($lieu). ' '.count($soupcon).' '.count($demandeur). ' '.count($evenement);
		return $scenar;
		
	}

?>