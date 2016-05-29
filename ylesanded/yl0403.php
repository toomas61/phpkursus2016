<?php
//Toomas R., phpkursus2016
$col[1]="Blue";
$col[2]="Brown";
$col[3]="BlueViolet";
$col[4]="Chartreuse";
$col[5]="Chocolate";
$col[6]="Coral";
$col[7]="CornflowerBlue";
$col[8]="Crimson";
$col[9]="DarkBlue";
$col[10]="DarkMagenta";
$col[11]="DarkRed";
$col[12]="DarkTurquoise";
$col[13]="DeepPink";
$col[14]="DodgerBlue";
$col[15]="ForestGreen";
echo '<table>
<tr>
<td>';
foreach ($col as $key => $val) {
  	echo $key . '. <span style="color:' . $val . '">' . $val . '</span><br />'; 
} 
echo '</td>
</tr>
</table>';
?>