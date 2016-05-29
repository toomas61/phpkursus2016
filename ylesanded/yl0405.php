<?php
//Toomas R., phpkursus2016
echo '<table border="1">'; 
for ($i=1; $i <= 10; $i++) { 
	echo '<tr>'; 
		for($j=1; $j <= 10; $j++) { 
		echo '<td><b>' . $i*$j . '</b></td>'; 
        } 
	echo '</tr>'; 
} 
echo '</table>'; 
?>