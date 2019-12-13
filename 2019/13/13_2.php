<?php
$maze = json_decode(file_get_contents("MAZE.TXT"), true);

$been[0][0] = true;

$curpos = array('y' => 0, 'x' => 0);
$history = array();
print_r($maze[3][0]);
while(true)
{
	//print_r($been);
	$been[$curpos['y']][$curpos['x']] = true;
	if($curpos == array('y' => 499, 'x' => 499))
	{
		break;
	}
	elseif($maze[$curpos['y']][$curpos['x']]['bottom'] == false && !isset($been[$curpos['y']+1][$curpos['x']]))
	{
		echo $curpos['y'] . "-" . $curpos['x'] . " Gå ned\n";
		$history[] = $curpos;
		$curpos['y']++;
	}
	elseif($maze[$curpos['y']][$curpos['x']]['right'] == false && !isset($been[$curpos['y']][$curpos['x']+1]))
	{
		echo $curpos['y'] . "-" . $curpos['x'] . " Gå høyre\n";
		$history[] = $curpos;
		$curpos['x']++;
	}
	elseif($maze[$curpos['y']][$curpos['x']]['left'] == false && !isset($been[$curpos['y']][$curpos['x']-1]))
	{
		echo $curpos['y'] . "-" . $curpos['x'] . " Gå venstre\n";
		$history[] = $curpos;
		$curpos['x']--;
	}
	elseif($maze[$curpos['y']][$curpos['x']]['top'] == false && !isset($been[$curpos['y']-1][$curpos['x']]))
	{
		echo $curpos['y'] . "-" . $curpos['x'] . " Gå opp\n";
		$history[] = $curpos;
		$curpos['y']--;
	}
	else
	{
		//print_r($history);
		$curpos = $history[count($history)-1];
		array_pop($history);
	}
}

$i=0;
foreach($been as $y)
{
	foreach($y as $x)
	{
		$i++;
	}
}
echo $i . "\n";

?>