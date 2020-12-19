<?php

$input = explode("\n", utf8_decode(file_get_contents("input.txt")));

// $input = array("4 3 [Jenny, Alvin, Greger, Petra, Olaug, Olaf]");


foreach($input as $rundeno => $runde)
{
	preg_match('/(\d) (\d*) \[(.*)\]/', $runde, $matches);
	$regel = $matches[1];
	$flytting = $matches[2];
	$deltagere = explode(", ", $matches[3]);
	
	$c = 0;
	while(count($deltagere) > 1)
	{
		
		$deltagere = flytt($flytting, $deltagere);
		
		if($regel == 1)
		{
			array_shift($deltagere);
		}
		elseif($regel == 2)
		{
			if($c >= count($deltagere))
				$c = 0;
			$deltagere = array_values($deltagere);
			unset($deltagere[$c]);
			$c++;
		}
		elseif($regel == 3)
		{
			$deltagere = array_values($deltagere);
			if(count($deltagere) == 2)
			{
				unset($deltagere[0]);
			}
			elseif(count($deltagere) % 2 == 0)
			{
				$ant = count($deltagere);
				unset($deltagere[$ant/2-1]);
				unset($deltagere[$ant/2]);
			}
			else
			{
				unset($deltagere[floor(count($deltagere)/2)]);
			}
		}
		elseif($regel == 4)
		{
			array_pop($deltagere);
		}
	}
	
	$vinner = array_pop($deltagere);
	@$vinnere[$vinner]++;
}
echo "\r";
arsort($vinnere);
foreach($vinnere as $vinner => $runder)
{
	echo $vinner . " vinner!\n";
	die;
}

function flytt($num, $deltagere)
{
	for($i = 0; $i < $num; $i++)
		array_unshift($deltagere, array_pop($deltagere));
	return $deltagere;
}
?>