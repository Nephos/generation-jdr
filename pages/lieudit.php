<script type="text/javascript" src="javascript/valider.js"></script>
<script type="text/javascript" src="javascript/verifint.js"></script>
<?php
include('lib/compteur.php');
include('lib/lieudit.php');

$lieudit = array();
$tablieudit=0;


if (!empty($_POST)) {
    $output='';
    if (!empty($_POST['qtt'])&& $_POST['qtt']!=0 && $_POST['qtt']<1000) {
        for ($i=0;$i<$_POST['qtt'];$i++,$tablieudit++) {
            $lieudit[$tablieudit]=creerlieudit(0);
            compteur('lieudit');
        }

        if ($_POST['qtt']>1) {
            $output.= '<h2>'.count($lieudit).' lieux-dits</h2>';
        } else {
            $output.= '<h2>'.count($lieudit).' lieu-dit</h2>';
        }

        foreach ($lieudit as &$value) {
            $output.= '- '.$value.'.<a href="index.php?page=ville&nom='.urlencode($value).'" ><i>D�tail</i></a><br />';
        }
    }
    if ($_POST['qtt']==0) {
        $output='Aucun lieu-dit';
    }
    if ($_POST['qtt']>=1000) {
        $output='Trop de g�n�ration demand�e';
    }
    $output.= '	<form method="post" onsubmit="return valid();" action="index.php?page=lieudit">';
    foreach ($_POST as $key=>$val) {
        $output.= "<input type='hidden' name='".$key."' value='".$val."'>";
    }
    $output.= '<input type="submit" name="genere" value="G�n�rer les m�mes lieux-dits" />';
    $output.= '<input type="button" value="G�n�rer d\'autres lieux-dits"  OnClick="window.location.href='."'index.php?page=lieudit'".'"></form>';
    echo $output;
} else {
    $output ='';
    $output.='<h2>Nombre de lieu-dit � g�n�rer</h2>';
    $output.='<form method="post" onsubmit="return valid();" action="index.php?page=lieudit">
		<table>
			<tr>
				<td><label for="qtt">Quantit� :</label></td>
				<td><input type="text" id="qtt" name="qtt" value="" onKeyUp="javascript:filter_numeric(this);"/></td>
				&nbsp;<font id="msgErreur" color="red"></tr>
			<tr><td align="center" colspan="3"><input type="submit" name="generer" value="G�n�rer" /></td></tr>
		</table>';
    echo $output;
}
?>
