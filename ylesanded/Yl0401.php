<?php
//Toomas Rudissaar, phpkursus2016
$mas['nimi']="Nipitiri";
$mas['aadress']="Tallinn, Kuuse 1";
$mas['pilt']="minupilt.png";
$mas['kodukas']="http://www.google.ee";
echo '
<html>
	<table cellm>
		<tr>
			<td>Nimi:</td>
			<td>Aadress:</td>
			<td>Pilt:</td>
			<td>Koduleht:</td>
		</tr>
		<tr>
			<td><b>' . $mas['nimi'] . '</b></td>
			<td><i>' . $mas['aadress'] . '</i></td>
			<td><img src="' . $mas['pilt'] . '" alt="minupilt"></td>
			<td><a href="' . $mas['kodukas'] . '">Google</a></td>
		</tr>
	</table>
</html>
';
?>