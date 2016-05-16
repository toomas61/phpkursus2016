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

function vaheta_elemendid($i1, $i2, $animals)  {
	$temporary = $animals[$i1];
	$animals[$i1] = $animals[$i2];
	$animals[$i2] = $temporary;
	return $animals;
}

function kustuta_element($i1, $animals)  {
	unset($animals[$i1]); 
		$animals = array_values($animals);
	return $animals;
}

$animals = vaheta_elemendid(3, 7, $animals);
$animals = kustuta_element(1, $animals);

kuva_massiiv($animals);

?>

