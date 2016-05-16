<?php
require ('gChart.php');
?>
<h2>Horizontal Grouped Bar Chart</h2>
<?php
$barChart = new gBarChart(150,500,'g','h');
$barChart->addDataSet(array(112,315,66,40));
$barChart->addDataSet(array(212,115,366,140));
$barChart->addDataSet(array(112,95,116,140));
$barChart->setColors(array("ff3344", "11ff11", "22aacc"));
$barChart->setGradientFill('c',0,array('FFE7C6',0,'76A4FB',1));
$barChart->setLegend(array("Sokkid", "Joped", "Tossud"));
?>
<img src="<?php print $barChart->getUrl();  ?>" />