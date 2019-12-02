<?php

$string = file_get_contents('./input-vekksort.txt', true);
$lines = explode("\n", $string);
$len = count($lines);
$true = true;
$prev = 0;

while($true)
{
	$sum = 0;
	$minnum = 0;
	$i = 0;
	foreach ($lines as $key => $line)
	{
		if($i >= $len-2)
		{
			if($line >= $minnum)
			{
				$sum++;
			}
		}
		else
		{
			if($line < $lines[$key+1] && $lines[$key+2] < $lines[$key+1])
			{
				unset($lines[$key+1]);
				$len = count($lines);
				break;
				
			}
			else
			{
				$sum++;
				$minnum = $line;
			}
		}
		$i++;
	}
	
	$lines = array_values($lines);
	
	/*$i = 0;
	$lines2 = array();
	foreach($lines as $line)
	{
		$lines2[$i] = $line;
		$i++;
	}
	$lines = $lines2;*/

	if($prev == count($lines))
	{
		$true = false;
	}
	$prev = $sum;
	$r++;
	echo "round: " . $r . " Num left: " . count($lines) . " Sum: " . $sum . "     \r";
}
echo "\n" . $sum . "\n";
print_r($lines);
//333431 feil
//334625 feil
//7832213 feil

?>