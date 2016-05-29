<?php 

//Toomas R., php kurus 2016

function number_info($i) {
	if ($i % 2) {
		echo "$i on paaritu arv;";
	}
	else {
		echo "$i on paarisarv;";
	}
	if ($i > 10) {
		echo " suurem kui 10;";
	}
	else {
		echo " väiksem kui 10;";
	}
	if ($i > 100) {
		echo " suurem kui 100;";
	}
	else {
		echo " väiksem kui 100;";
	}
	echo " $i ruudus on " . ($i * $i);
	echo "; ruutjuur $i-st on " . pow($i, 1/2);
}
number_info(1);
echo "<br>";
number_info(8);
echo "<br>";
number_info(9);
echo "<br>";
number_info(15);
echo "<br>";
number_info(200);
echo "<br>";

 ?>