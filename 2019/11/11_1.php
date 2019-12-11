<?php

$file = file_get_contents('terreng.txt');
$chars = str_split($file);

$speed = 10703437;
$fjell = 0;
$i = 0;
$iceCount = 1;
foreach($chars as $char)
{
	$i++;
	if($char == 'G')
	{
		$speed = $speed - 27;
		$iceCount = 1;
	}
	elseif($char == 'I')
	{
		$speed = $speed + $iceCount * 12;
		$iceCount++;
	}
	elseif($char == 'A')
	{
		$speed = $speed - 59;
		$iceCount = 1;
	}
	elseif($char == 'S')
	{
		$speed = $speed - 212;
		$iceCount = 1;
	}
	elseif($char == 'F')
	{
		$fjell++;
		if($fjell %2 == 1)
		{
			$speed = $speed - 70;
		}
		else
		{
			$speed = $speed + 35;
		}
		$iceCount = 1;
	}
	if($speed <= 0)
	{
		echo "Stopplengde: " . $i . "\n";
		die();
	}
}
?>