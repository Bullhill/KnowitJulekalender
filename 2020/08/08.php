<?php


$input = file_get_contents("input.txt");

$linjer = explode("\n", $input);
$mals = array_slice($linjer, 0, 50);
$rute = array_slice($linjer, 50, -1);


foreach($mals as $mal)
{
	
	
	preg_match('/(.*): \((\d*), (\d*)\)/i', $mal,$match);
	$malliste[$match[1]] = array('x' => $match[2], 'y' => $match[3]);
}

$cx = 0;
$cy = 0;
$times = array();
foreach($malliste as $key => $mal)
{
	$times[$key] = 0;
}

foreach($rute as $rutemal)
{
	while($cx != $malliste[$rutemal]['x'])
	{
		if($cx < $malliste[$rutemal]['x'])
			$cx++;
		elseif($cx > $malliste[$rutemal]['x'])
			$cx--;
		
		updatetime();
	}
	while($cy != $malliste[$rutemal]['y'])
	{
		if($cy < $malliste[$rutemal]['y'])
			$cy++;
		elseif($cy > $malliste[$rutemal]['y'])
			$cy--;
		
		updatetime();
	}
}


echo (max($times) - min($times)) . "\n";

function updatetime()
{
	global $cx;
	global $cy;
	global $malliste;
	global $times;
	
	foreach($malliste as $key => $mal)
	{
		$dist = abs($cx - $mal['x']) + abs($cy - $mal['y']);
		
		if($dist == 0)
			$times[$key] += 0.25;
		elseif($dist < 5)
			$times[$key] += 0.25;
		elseif($dist < 20)
			$times[$key] += 0.5;
		elseif($dist < 50)
			$times[$key] += 0.75;
		else
			$times[$key] += 1;
	}
}

?>