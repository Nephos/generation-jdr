<?php

include('lib/compteur.php');
$output='';
$output.='<h2>Jusqu\'� pr�sent ont �t� g�n�r�s sur le site :</h2>';

$output.='Auberges : '.compter('auberge').' <br />';
$output.='Auberges d�taill�es : '.compter('aubergedetail').' <br />';
$output.='Gemmes : '.compter('gemme').' <br />';
$output.='Lieux-dits : '.compter('lieudit').' <br />';
$output.='Noms complets : '.compter('nomevolue').' <br />';
$output.='Objets d\'arts : '.compter('objart').' <br />';
$output.='Objets magiques : '.compter('objmag').' <br />';
$output.='Objets non magiques : '.compter('objnmag').' <br />';
$output.='Parchemins : '.compter('parchemin').' <br />';
$output.='Pi�ges : '.compter('piege').' <br />';
$output.='Potions : '.compter('potion').' <br />';
$output.='Sc�nari minute : '.compter('scenario').' <br />';
$output.='Tr�sors complets: '.compter('tresor').' <br />';
$output.='Villes : '.compter('village').' <br />';
$output.='<br />';

$output.='Noms Modernes: '.compter('nomsmodernes').' <br />';

echo $output;
