<script type="text/javascript" src="javascript/validermail.js"></script>
<?php
include ('lib/newsletters.php');

if(!empty($_POST)){
	$output=''; 
	$output.='Merci pour votre inscription, l\'adresse '.$_POST['mail'].' � bien �t� enregistr�e<br/>';
	$output.='A bient�t';
	echo $output;
	
	newletters($_POST['mail']);
 }
 else {
	$output=''; 
	$output.='<h2>Newsletters</h2>';
	$output.='Si vous d�sirez �tre tenu inform� des mises-�-jour de g�n�ration-jdr il vous suffit d\'inscrire votre adresse mail.<br />';
	$output.='Un mail ne sera envoy� qu\'� la venue d\'une nouvelle g�n�ration.<br />';
	
	$output.='<form method="post" onsubmit="return validInscription();" action="index.php?page=newsletter">
			<table>
				<tr>
					<td><label>Mail :</label><input type="text" id="mail" name="mail" size="40" value=""/></td>
					&nbsp;<font id="msgErreur" color="red"></tr>
				<tr><td align="center" colspan="2"><input type="submit" name="generer" value="Envoyer" /></td></tr>		
			</table>
			</form>';
	$output.='<p>Pour vous d�sinscrire merci d\'envoyer un mail via la partie contact</p>'; 

	echo $output;
 }
?>