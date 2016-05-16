<?php
require ('gChart.php');
?>
<h2>Veebibrauserite kasutus wikipedia.org andmete järgi seisuga oktoober 2011</h2>
Firefox 23,6% <br> Chrome 20,6% <br> Safari 11,2% <br> Opera 5,0% <br> Android 1,9% <br> Muu 3,5% <br> Internet Explorer 34,2%

<?php

echo "<br>";
$pie3dChart = new gPie3DChart();
$pie3dChart->addDataSet(array(23,20,11,5,2,4,34));
$pie3dChart->setLegend(array("Firefox", "Chrome", "Safari","Opera", "Android", "Muu", "Internet Explorer"));
$pie3dChart->setLabels(array("Firefox", " chrome", "Safari","Opera", "Android", "Muu", "Internet Explorer"));
$pie3dChart->setColors(array("C11B17", "347C17", "7E587E", "ADDFFF", "C35617", "AFC7C7", "736AFF"));
?>
<img src="<?php print $pie3dChart->getUrl();  ?>" /> 
