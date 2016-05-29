<?php 

//Toomas R., php kurus 2016

function string_info($string) {
	$strlen = strlen($string);
	$first_letter = $string[0];
	$last_letter = substr($string, -1);
	$lower_case = strtolower($string);
	$upper_case = strtoupper($string);
		echo 'String: ' . $string;
		echo '<br>';
		echo 'Stringi pikkus ' . $strlen;
		echo '<br>';
	
		echo 'Esimene täht lauses: ' . $first_letter;
		echo '<br>';
		echo 'Viimane täht lauses: ' . $last_letter;
		echo '<br>';
		echo 'Väikeste tähtedega: ' . $lower_case;
		echo '<br>';
		echo 'Suurte tähtedega: ' . $upper_case;
		echo '<br>';
		echo 'A-tähtede arv lauses: ' . substr_count($lower_case, 'a');
}

$string = 'Meil aiaäärne tänavas kui armas oli see';

echo '<p>';
string_info($string);

?>

