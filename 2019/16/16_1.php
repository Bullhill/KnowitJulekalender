<?php

$file = file_get_contents("fjord.txt");
$map = rotatemap($file);

$goright = false;
$bpos = 0;
$turn = 0;
foreach($map as $l => $line)
{
	if($bpos == 0)
	{
		$bpos = array_search("B", $line);
	}
	elseif($goright)
	{
		$bpos++;
		$map[$l][$bpos] = "\\";
		if($line[$bpos+3] == "#" || $map[$l+1][$bpos+3] == "#")
		{
			$goright = false;
			$bpos++;
			$turn++;
		}
	}
	else
	{
		$bpos--;
		$map[$l][$bpos] = "/";
		if($line[$bpos-3] == "#" || $map[$l+1][$bpos-3] == "#")
		{
			$goright = true;
			$bpos--;
			$turn++;
		}
	}
}


foreach($map as $line)
{
	echo implode($line) . "\n";
	usleep(50000);
}
echo $turn . "\n";


function rotatemap($file)
{
	$lines = explode("\n", $file);
	
	foreach($lines as $l => $line)
	{
		$chars = str_split($line);
		foreach($chars as $c => $char)
		{
			$map[$c][$l] = $char;
		}
	}
	return $map;
	
}

?>