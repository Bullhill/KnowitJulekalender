<?php

$model = file_get_contents("MODEL.CSV");

$triangle = explode("\n", $model);

//$triangle = array("0,0,0,10,0,0,0,0,10", "0,0,0,0,0,10,0,10,0", "0,0,0,0,10,0,10,0,0", "10,0,0,0,10,0,0,0,10");
$sum = 0;
for($t=0;$t<count($triangle); $t++)
{
	
	$list[] = explode(",", $triangle[$t]);
}
$sum += VolumeOfModel($list);

echo round(($sum/1000), 3) . "\n";

function VolumeOfModel($list)
{
	$vol = 0;
	foreach($list as $tri)
	{
		list($p1['x'], $p1['y'], $p1['z'], $p2['x'], $p2['y'], $p2['z'], $p3['x'], $p3['y'], $p3['z']) = $tri;
		$vol += SignedVolumeOfTriangle($p1, $p2, $p3);
	}
	return abs($vol);
}



function SignedVolumeOfTriangle($p1, $p2, $p3)
{
	$v321 = $p3['x']*$p2['y']*$p1['z'];
	$v231 = $p2['x']*$p3['y']*$p1['z'];
	$v312 = $p3['x']*$p1['y']*$p2['z'];
	$v132 = $p1['x']*$p3['y']*$p2['z'];
	$v213 = $p2['x']*$p1['y']*$p3['z'];
	$v123 = $p1['x']*$p2['y']*$p3['z'];
	return (1.0/6.0)*(-$v321 + $v231 + $v312 - $v132 - $v213 + $v123);
}
?>