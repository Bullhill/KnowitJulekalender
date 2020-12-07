<?php

$skog = file_get_contents("forest.txt");

$skoglinjer = explode("\n", $skog);
foreach($skoglinjer as $key => $linje)
{
	$matrix[$key] = str_split($linje);
}

$hoide = count($skoglinjer)-1;
$tre = 0;

for($x = 0; $x+1 < count($matrix[0]); $x++)
{
	$defekt = false;
	if($matrix[$hoide][$x] == "#")
	{
		
		sjekkopp($x, $hoide-1);
		
		if(!$defekt)
		{
			$tre++;
		}
	}
	
}


function sjekkopp($x, $y)
{
	global $matrix;
	if($y>=0 && ($matrix[$y][$x-1] == '#' || $matrix[$y][$x] == '#' || $matrix[$y][$x+1] == '#'))
	{
		sjekkut($x, $y, 0);
		
		sjekkopp($x,$y-1);
	}
	else
	{
		return;
	}
	
}

function sjekkut($x, $y, $o)
{
	global $matrix;
	global $defekt;
	
	if($x-$o-2 < 0 )
	{
		return;
	}
	elseif($matrix[$y][$x-2-$o] == ' ' && $matrix[$y][$x-1-$o] == ' ' && $matrix[$y][$x+1+$o] == ' ' && $matrix[$y][$x+2+$o] == ' ')
	{
		return;
	}
	elseif($matrix[$y][$x-1-$o] == '#' && $matrix[$y][$x+1+$o] == ' ')
	{
		$defekt = true;
	}
	elseif($matrix[$y][$x-1-$o] == ' ' && $matrix[$y][$x+1+$o] == '#')
	{
		$defekt = true;
	}
	elseif($matrix[$y][$x-2-$o] == '#' && $matrix[$y][$x-1-$o] == ' ' && $matrix[$y][$x+1+$o] == ' ' && $matrix[$y][$x+2+$o] == '#')
	{
		$defekt = true;
	}
	else
	{
		sjekkut($x, $y, $o+1);
	}
}

echo $tre . "\n";
?>