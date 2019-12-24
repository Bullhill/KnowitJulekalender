<?php

$file = file_get_contents("turer.txt");

$turer = explode("\n---\n", $file);

foreach($turer as $id => $tur)
{
	$punkter = explode("\n", $tur);
	unset($xlist);
	unset($ylist);
	foreach($punkter as $punkt)
	{
		list($y, $x) = explode(",", $punkt);
		$xlist[] = $x;
		$ylist[] = $y;
	}
	$img = imagecreate(max($xlist)+10, max($ylist)+10);
	$white = imagecolorallocate($img, 255, 255, 255); 
	$red = imagecolorallocate($img, 255, 0, 0); 
	foreach($punkter as $punkt)
	{
		list($y, $x) = explode(",", $punkt);
		
		imagesetpixel($img, $x,$y, $red);
		
	}
	imagepng($img, $id . ".png", 1);
	imagedestroy($img);
}
?>