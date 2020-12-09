<?php

$elves = file_get_contents("elves.txt");

$linjer = explode("\n", $elves);
foreach($linjer as $key => $linje)
{
	$matrix[1][$key] = str_split($linje);
}

$new = true;
$day = 2;
$lastsyk = -1;
while($new)
{
	$syk = 0;
	foreach($matrix[$day-1] as $y => $row)
	{
		foreach($row as $x => $cell)
		{
			if($cell == "S")
			{
				$matrix[$day][$y][$x] = "S";
				$syk++;
			}
			elseif(@substr_count($matrix[$day-1][$y-1][$x] . $matrix[$day-1][$y+1][$x] . $matrix[$day-1][$y][$x-1] . $matrix[$day-1][$y][$x+1], 'S') >= 2)
			{
				$matrix[$day][$y][$x] = "S";
				$syk++;
			}
			else
			{
				$matrix[$day][$y][$x] = "F";
			}
		}
	}
	
	if($syk == $lastsyk)
	{
		$new = false;
	}
	else
	{
		$day++;
		$lastsyk = $syk;
	}
	
}


echo "Pandemien stopper etter " . $day . " dager, da er " . $syk . " syke\n";

?>