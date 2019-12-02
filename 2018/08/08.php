<?php
$string = file_get_contents('./input-dolls.txt', true);
$lines = explode("\n", $string);

$lastcolor = 'svart';
$lastmm = 0;
$sum = 0;
foreach($lines as $line)
{
	//echo $line . "\n";
	preg_match('/(.*),(\d\d?\d?\d?)/', $line, $matches);
	//print_r($matches);
	echo "Farge: " . $matches[1] . " - ";
	echo "SisteFarge: " . $lastcolor . " - ";
	
	if($matches[1] == $lastcolor)
	{
		echo "samme farge";
	}
	elseif($matches[2] == $lastmm)
	{
		echo "for liten";
	}
	else
	{
		echo "Add";
		$sum++;
		$lastcolor = $matches[1];
		$lastmm = $matches[2];
	}
	echo "\n";
}

echo $sum . "\n";
?>