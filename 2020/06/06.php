<?php

$godteri = file_get_contents("godteri.txt");
//$godteri = "10,14,14,13,13,13,15,14,11,15,11";

$poser = explode(',', $godteri);
$alver = 127;
//$alver = 9;


$rposer = array_reverse($poser);
$total = array_sum($poser);

$fjernet = 0;
foreach($rposer as $pose){
	$fjernet += $pose;
	if((($total-$fjernet) / $alver) == floor(($total-$fjernet) / $alver))
		echo (($total-$fjernet)/$alver) . "\n";}
?>