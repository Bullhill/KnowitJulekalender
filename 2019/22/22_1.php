<?php


$file = file_get_contents("forest.txt");
$skog = rotatemap($file);
$c= 0;
$treelen = 0;
$sum = 0;
foreach($skog as $tre)
{
	preg_match("/#+/", implode($tre), $matches);
	
	if(!isset($matches[0]))
	{
		$sum += $treelen * 200 * 0.2;
		$treelen = 0;
	}
	elseif($treelen < strlen($matches[0]))
	{
		$treelen = strlen($matches[0]);
	}
}

echo "Svar: " . $sum . "\n";

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