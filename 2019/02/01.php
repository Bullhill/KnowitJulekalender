<?php

$file = file_get_contents("world.txt");
$lines = explode("\n", $file);
foreach($lines as $key => $line)
{
	$points[$key] = str_split($line);
}

//print_r($points);

$c = 0;
foreach($points as $rowno => $row)
{
	$stoneleft = false;
	foreach($row as $col => $point)
	{
		if($stoneleft && $point == " ")
		{
			if(checkR($rowno, $col))
			{
				$points[$rowno][$col] = "~";
				$c++;
			}
		}
		elseif($point == "#")
		{
			$stoneleft = true;
		}
	}
}

//print_r($points);
echo "vannmengde: " . $c . "\n";
function checkR($row, $col)
{
	global $points;
	for($i = $col; $i < 3000; $i++)
	{
		if($points[$row][$i] == "#")
		{
			return true;
		}
	}
	return false;
}
?>