<?php
require ('gChart.php');
?>
<h2>Tegemata tööd</h2>

<?php
$pie3dChart = new gPie3DChart();
$pie3dChart->addDataSet(array(100,115,66,40));
$pie3dChart->setLegend(array("Matemaatika", "Java Programmeerimine", "Inglise keel","PHP"));
$pie3dChart->setLabels(array("Matemaatika", "Java Programmeerimine", "Inglise keel","PHP"));
$pie3dChart->setColors(array("ff3344", "11ff11", "22aacc", "3333aa"));
?>
<img src="<?php print $pie3dChart->getUrl();  ?>" /> 
<p>