<?php
//Toomas R., php kursus 2016

$animals[0] = 'Karu';
$animals[1] = 'Jänes';
$animals[2] = 'Hunt';
$animals[3] = 'Rebane';
$animals[4] = 'Hirv';
$animals[5] = 'Hiir';
$animals[6] = 'Põder';
$animals[7] = 'Ahv';
$animals[8] = 'Mäger';
$animals[9] = 'Mutt';

function kuva_massiiv($animals) {
	for ($i=0; $i<sizeof($animals); $i++) {
		echo "$i. $animals[$i]<br>";
		echo "<p> </p>";
	}
}
echo kuva_massiiv($animals);

?>