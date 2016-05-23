<?php
//Toomas Rudissaar, phpkursus2016

echo '<table>
<tr>
<td>';
for ($i=1; $i < 21; $i++) { 
  echo $i . '. <input type="checkbox" name="box[' . $i . ']"><br />'; 
} 
echo '</td>
<td>';
for ($i=1; $i < 21; $i++) { 
  echo $i . '. <input type="text" name="cell[' . $i . ']"><br />'; 
} 
echo '</td>
<td>';
for ($i=1; $i < 21; $i++) { 
  echo $i . '. <input type="radio" name="radio" value="value[' . $i . ']"><br />'; 
}
echo '</td></tr></table>';
?>