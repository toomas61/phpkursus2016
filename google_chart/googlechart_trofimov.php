<div style='text-align: center; font-size: 26px; margin-top: 100px; color: #4A4A4A;'>
Global Weekly Console Sales Chart (In Thousands)<br>
<?php
require ('gChart.php');
$barChart = new gBarChart(800,360);
$barChart->addDataSet(array(349,380,374,705));
$barChart->addDataSet(array(282,517,461,1201));
$barChart->addDataSet(array(235,285,384,934));
$barChart->addDataSet(array(375,369,504,967));
$barChart->addDataSet(array(108,109,158,231));
$barChart->addDataSet(array(118,138,189,423));
$barChart->setColors(array("EE0000","3D9140","3A5FCD","9400D3","8B7B8B","8B4513"));
$barChart->setLegend(array("PS3","X360","Wii","3DS","PSP","DS"));
$barChart->setVisibleAxes(array('x','y'));
$barChart->setDataRange(0,1250);
$barChart->addAxisRange(1, 0, 1250);
$barChart->addAxisLabel(0, array("05th November 2011", "12th November 2011", "19th November 2011", "26th November 2011"));
$barChart->setGridLines(0,8);
$barChart->setGradientFill('c',0,array('E8E8E8',0,'FFFFFF',1));
$barChart->setAutoBarWidth();
?>
<img src="<?php print $barChart->getUrl();  ?>" />
</div>