<?php
$string = file_get_contents('./input-vekksort.txt', true);
$lines = explode("\n", $string);
$minnum = 0;
$sum = 0;
foreach ($lines as $line){
	if($line >= $minnum){
		$sum = $sum+$line;
		$minnum = $line;}}
echo $sum . "\n";
?>