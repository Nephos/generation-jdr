<?php

function appeltableau() {
$output ='';
	$output.='<h2>Taille du village</h2>';
	$output.='<form method="post" onsubmit="return valid();"action="index.php?page=ville">
		<table>
			<tr>
				<td><label for="fp1">Taille du village</label></td>
				<td><select name="taille">
					<OPTION VALUE="0">Al�atoire</OPTION>
					<OPTION VALUE="1">Lieu-dit</OPTION>
					<OPTION VALUE="2">Hameau</OPTION>
					<OPTION VALUE="3">Village</OPTION>
					<OPTION VALUE="4">Bourg (petite ville)</OPTION>
					<OPTION VALUE="5">Ville importante</OPTION>
					<OPTION VALUE="6">Grande ville</OPTION>
					<OPTION VALUE="7">Cit�</OPTION>
					<OPTION VALUE="8">M�tropole</OPTION>
					<!-- <OPTION VALUE="9">Sp�ciale</OPTION>-->
					</SELECT></td>
			</tr>
			<tr>
				<td><label for="eco">Niveau �conomique</label></td>
				<td><select name="eco">
					<OPTION VALUE="0">Al�atoire</OPTION>
					<OPTION VALUE="1">Faible</OPTION>
					<OPTION VALUE="2">Moyen</OPTION>
					<OPTION VALUE="3">Elev�</OPTION>
				</SELECT></td>
			</tr>
			<tr>
				<td><label for="particu">Particularit�</label></td>
				<FORM>
				<td>
					<input type="checkbox" name="particu" value="0" checked="checked" style="visibility:hidden"/>
					<INPUT type="checkbox" name="particu" value="1"> Portuaire
					<INPUT type="checkbox" name="particu" value="2"> Militaire
				</td>
			</tr>
			<tr>
				<td><label for="type">Type de ville</label></td>
				<td><select name="type">
					<OPTION VALUE="0">Al�atoire</OPTION>
					<OPTION VALUE="1">Isol�e</OPTION>
					<OPTION VALUE="2">Ouverte</OPTION>
					<OPTION VALUE="3">Cosmopolite</OPTION>
				</SELECT></td>
			</tr>
			<!--<tr>
				<td><label for="particu">Pr�dominance de la race</label></td>
				<td><select name="race">
					<OPTION VALUE="7">Humain</OPTION>
					<OPTION VALUE="3">Elfe</OPTION>
					<OPTION VALUE="4">Gnome</OPTION>
					<OPTION VALUE="6">Halfelin</OPTION>
					<OPTION VALUE="6">Nain</OPTION>
				</SELECT></td>
			</tr>-->
			<tr><td align="center" colspan="3"><input type="submit" name="generer" value="G�n�rer" /></td></tr>		
		</table>
		<br>Les valeurs selection�es ne sont qu\'indicatives et peuvent �tre modifi�es par la g�n�ration.
		<br>Attention les grandes villes, cit�s et m�tropoles peuvent prendre dix � douze secondes pour �tre charg�es...';
		
		return $output;
		}
?>