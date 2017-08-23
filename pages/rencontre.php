<script type="text/javascript" src="javascript/valider.js"></script>
<script type="text/javascript" src="javascript/verifint.js"></script>
<?php

include('lib/rencontre.php');

//$environnement = array("Quelconque", "Milieu aquatique","Plaine","D�sert","Colline","Mar�cage","For�t","Montagne","Souterrain");
$climat = array("Quelconque","Chaud","Temp�r�","Froid");
$nivdifficul = array("facile","facile si bien n�goci�e","�quilibr�e","tr�s difficile","injouable");
$tabenvi = array("en milieu aquatique","dans les plaines","dans le d�sert","dans une colline","dans un mar�cage","dans une for�t","dans une montagne","dans un souterrain");

if (!empty($_POST)) {
    $output='';

    if ($_POST['environnement']==0) {
        $envi=rand(0, 7);
    } else {
        $envi=$_POST['environnement'];
    }

    if ($_POST['nbrcrea']==0) {
        $nbrcrea=rand(0, 6);
    } else {
        $nbrcrea=$_POST['nbrcrea'];
    }

    if ($_POST['nivdiffi']==0) {
        $renc=rand(1, 100);
        if ($renc>=1 && $renc<=10) {
            $niv=1;
        }
        if ($renc>10 && $renc<=30) {
            $niv=2;
        }
        if ($renc>30 && $renc<=80) {
            $niv=3;
        }
        if ($renc>80 && $renc<=95) {
            $niv=4;
        }
        if ($renc>95 && $renc<=100) {
            $niv=5;
        }
    } else {
        $niv=$_POST['nivdiffi'];
    }

    $fppj=calculFP($_POST['puissance'], $niv); //calcul de la difficult�
    $fpcrea=fpdecreature($nbrcrea, $fppj);
    echo choixcreat($envi-1, $fpcrea);


    $output.='La rencontre est concid�r�e comme '.$nivdifficul[$niv-1].'.';
    if ($niv-1==1) {
        $output.='<br>Il faudra que les pj\'s d�couvrent le petit truc qui rends cette rencontre particuliere, par exemple un pretre en invisibilit� qui soigne les cr�atures';
    }
    $output.='<br>La rencontre � lieu '.$tabenvi[$envi-1];

    $output.= '<br>FPPJ : '.$fppj;
    $output.= '<br>FPCREA : '.$fpcrea;
    $output.= '<br>nbr cre :'.$nbrcrea;



    echo $output;
} else {
    $output ='';
    $output.='<h2>G�n�rer une rencontre</h2>';
    $output.='<form method="post" onsubmit="return valid();" action="index.php?page=rencontre">
		<table>
			<tr>
				<td><label for="FP">FP du groupe :</label></td>
				<td>
					<select name="puissance">
					<OPTION VALUE="1">1</OPTION>
					<OPTION VALUE="2">2</OPTION>
					<OPTION VALUE="3">3</OPTION>
					<OPTION VALUE="4">4</OPTION>
					<OPTION VALUE="5">5</OPTION>
					<OPTION VALUE="6">6</OPTION>
					<OPTION VALUE="7">7</OPTION>
					<OPTION VALUE="8">8</OPTION>
					<OPTION VALUE="9">9</OPTION>
					<OPTION VALUE="10">10</OPTION>
					<OPTION VALUE="11">11</OPTION>
					<OPTION VALUE="12">12</OPTION>
					<OPTION VALUE="13">13</OPTION>
					<OPTION VALUE="14">14</OPTION>
					<OPTION VALUE="15">15</OPTION>
					<OPTION VALUE="16">16</OPTION>
					<OPTION VALUE="17">17</OPTION>
					<OPTION VALUE="18">18</OPTION>
					<OPTION VALUE="19">19</OPTION>
					<OPTION VALUE="20">20</OPTION>
				</SELECT>
				</td>
				</tr>
				<tr>
				<td><label for="nbrcrea">Nombre de cr�ature rencontr�es :</label></td>
				<td>
				<select name="nbrcrea">
					<OPTION VALUE="0">Al�atoire</OPTION>
					<OPTION VALUE="1">1</OPTION>
					<OPTION VALUE="2">2</OPTION>
					<OPTION VALUE="3">3</OPTION>
					<OPTION VALUE="4">4</OPTION>
					<OPTION VALUE="5">5 � 6</OPTION>
					<OPTION VALUE="7">7 � 9</OPTION>
					<OPTION VALUE="8">10 � 12</OPTION>

				</SELECT>
				</td>



				<tr>
				<td><label for="nivdiffi">Difficult� de la rencontres :</label></td>
				<td>
					<select name="nivdiffi">
					<OPTION VALUE="0">Al�atoire</OPTION>
					<OPTION VALUE="1">Facile</OPTION>
					<OPTION VALUE="2">Facile si bien n�goci�e</OPTION>
					<OPTION VALUE="3">Equilibr�</OPTION>
					<OPTION VALUE="4">Tres difficile</OPTION>
					<OPTION VALUE="5">Injouables</OPTION>

				</SELECT>
				</td>
				</tr>
			<tr>
				<td><label for="env">Environnement :</label></td>
				<td><select name="environnement">
					<OPTION VALUE="0">Quelconque</OPTION>
					<OPTION VALUE="1">Milieu aquatique</OPTION>
					<OPTION VALUE="2">Plaine</OPTION>
					<OPTION VALUE="3">D�sert</OPTION>
					<OPTION VALUE="4">Colline</OPTION>
					<OPTION VALUE="5">Mar�cage</OPTION>
					<OPTION VALUE="6">For�t</OPTION>
					<OPTION VALUE="7">Montagne</OPTION>
					<OPTION VALUE="8">Souterrain</OPTION>
				</SELECT></td>
			</tr>

			<tr>
				<td><label for="climat">Climat :</label></td>
				<td><select name="climat">
					<OPTION VALUE="0">Quelconque</OPTION>
					<OPTION VALUE="1">Chaud</OPTION>
					<OPTION VALUE="2">Temp�r�</OPTION>
					<OPTION VALUE="3">Froid</OPTION>
				</SELECT></td>
			</tr>

			<tr><td align="center" colspan="3"><input type="submit" name="generer" value="G�n�rer" /></td></tr>
		</table>';
    echo $output;
}
?>
