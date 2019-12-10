<?php

$toalettpapir = 0;
$toalettpapirOns = 0;
$tannkrem = 0;
$sjampo = 0;
$sjampoSun = 0;

$file = file_get_contents('logg.txt');
$lines = explode("\n", $file);

foreach($lines as $row => $line)
{
	if(preg_match("/(\D\D\D) (\d\d)\:/", $line, $day))
	{
		$unixdate = strtotime($day[2] . " " . $day[1] . " 2018");
		$rowcheck = $row+1;
		while((count($lines) -1) >= $rowcheck && !preg_match("/\D\D\D \d\d\:/", $lines[$rowcheck]))
		{
			if(preg_match("/\t\* (\d\d?\d?) meter toalettpapir/", $lines[$rowcheck],$match))
			{
				$toalettpapir += $match[1];
				if(date("N", $unixdate) == 3)
				{
					$toalettpapirOns += $match[1];
				}
			}
			elseif(preg_match("/\t\* (\d\d?\d?) ml tannkrem/", $lines[$rowcheck],$match))
			{
				$tannkrem += $match[1];
			}
			elseif(preg_match("/\t\* (\d\d?\d?) ml sjampo/", $lines[$rowcheck],$match))
			{
				$sjampo += $match[1];
				if(date("N", $unixdate) == 7)
				{
					$sjampoSun += $match[1];
				}
			}
			else
			{
				echo "problem: " . $lines[$rowcheck] . "\n";
			}
			$rowcheck++;
		}
	}
}

echo "Fasit: " . (floor($tannkrem/125) * floor($sjampo/300) * floor($toalettpapir/25) * $sjampoSun * $toalettpapirOns) . "\n";