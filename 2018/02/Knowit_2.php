<?php
$string = file_get_contents('./input-rain.txt', true);
//$string = file_get_contents('./testdata.txt', true);
$string = str_replace('(', '', $string);
$string = str_replace(')', '', $string);
$lines = explode("\n", $string);
$minnum = 0;
$sum = 0;
//print_r($lines);
foreach ($lines as $id => $line)
{
	$kords = explode(";", $line);
	list ($x1, $y1) = explode(",", $kords[0]);
	list ($x2, $y2) = explode(",", $kords[1]);
	$cx1 = "x";
	$cx2 = "x";
	$cy1 = "x";
	$cy2 = "x";
	if(($x1 >= $x2 && $y1 >= $y2) || ($x1 <= $x2 && $y1 <= $y2))
	{
		if($x1 >= $x2){$cx2 = $x1 - $x2; $cx1 = 0;}
		if($x1 <= $x2){$cx2 = $x2 - $x1; $cx1 = 0;}
		
		if($y1 >= $y2){$cy2 = $y1 - $y2; $cy1 = 0;}
		if($y1 <= $y2){$cy2 = $y2 - $y1; $cy1 = 0;}
		
		$ang = rad2deg(atan($cy2/$cx2));
		//if ($ang <0){echo $ang . " -  " . $x1 . "," . $y1 . "-" . $x2 . "," . $y2 . " - " . $cx1 . "," . $cy1 . "-" . $cx2 . "," . $cy2 . "\n";}
		echo $ang . "\n";
	}
	elseif(($x1 >= $x2 && $y1 < $y2) || ($x1 <= $x2 && $y1 > $y2))
	{
		if($x1 >= $x2){$cx2 = $x1 - $x2; $cx1 = 0;}
		if($x1 <= $x2){$cx2 = $x2 - $x1; $cx1 = 0;}
		if($y1 >= $y2){$cy2 = $y1 - $y2; $cy1 = 0;}
		if($y1 <= $y2){$cy2 = $y2 - $y1; $cy1 = 0;}
		
		$ang = 90+rad2deg(atan($cy2/$cx2));
		//if ($ang <0){echo $x1 . "," . $y2 . "-" . $x1 . "," . $y2 . "\n";}
		echo $ang . "\n";
	}
	else
	{
		echo $y2 . "Woops!\n";
	}
	
	
}
//print_r($angs);
?>