<?php

$objet = array();
$tabobjet=0;
$total=0;

if(!empty($_POST)){
	$output='';
	if(!empty($_POST['qtt'])){
		if (preg_match_all("`([0-9]+)[dD]{1}([0-9]+)([a-zA-Z]{0,2})`", $_POST['qtt'], $objet)){
			echo $_POST['qtt']."<br/>";
			print_r($objet);
			$output.= '<h2>'.count($objet).' lanc�s</h2>';
			foreach ($objet as &$value) {
				$output.= '-'.$value[0].' d\'une valeur de '.$value[1].' pi�ces d\'or <br />';
				$total+=$value[1];
			}
		}
		else $output = "Aucune correspondance trouv�e.";
	}
echo $output;
}
else {	
	$output ='';
	$output.='<h2>Nombre d\'objet magique � g�n�rer</h2>';
	$output.='<form name="generer" method="post" action="index.php?page=regex">
		<table>
			<tr>
				<td><label for="fp1">Quantit� :</label></td>
				<td><input type="text" id="qtt" name="qtt" value="" /></td>
				&nbsp;<font id="msgErreur" color="red"></tr>
			<tr><td align="center" colspan="3"><input type="submit" name="generer" value="G�n�rer" /></td></tr>		
		</table>';
	echo $output;
}
?>