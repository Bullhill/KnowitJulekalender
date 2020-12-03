<?php


$foundwords = array();

$wordfile = file_get_contents("wordlist.txt");
$words = explode("\n", $wordfile); 

$matrixfile = file_get_contents("matrix.txt");
$matrixlines = explode("\n", $matrixfile);
foreach($matrixlines as $key => $line)
{
	$matrix[$key] = str_split($line);
}

$ymax = count($matrix);
$xmax = count($matrix[0]);


//Lage vertikale linjer

for($x = 0; $x < $xmax; $x++)
{
	for($y = 0; $y < $ymax; $y++)
	{
		@$vertikal[$x] = $vertikal[$x] . $matrix[$y][$x];
	}
}


//Diagonal linjer
for($y = -$xmax; $y <= $ymax; $y++)
{
	if($y < 0)
	{
		$cy = 0;
		$cx = -$y;
	}
	else
	{
		$cy = $y;
		$cx = 0;
	}

	while($cx < $xmax && $cy <= $ymax)
	{
		
		@$diagonalh[$y] = $diagonalh[$y] . $matrix[$cy][$cx];
		$cx++;
		$cy++;
	}
}

for($y = -$xmax; $y <= $ymax; $y++)
{
	if($y < 0)
	{
		$cy = 0;
		$cx = $xmax + $y;
	}
	else
	{
		$cy = $y;
		$cx = $xmax;
	}
	while($cx >= 0 && $cy < $ymax)
	{
		@$diagonalv[$y] = $diagonalv[$y] . $matrix[$cy][$cx];
		$cx--;
		$cy++;
	}
}





foreach(array_merge($matrixlines, $vertikal, $diagonalh, $diagonalv) as $line)
{
	search_string($line);
}


function search_string($input)
{
	global $words;
	foreach($words as $word)
	{
		if(strpos($input, $word) !== FALSE)
		{
			unset($words[array_search($word, $words)]);
		}
		if(strpos(strrev($input), $word) !== FALSE)
		{
			unset($words[array_search($word, $words)]);
		}
	}
	
	
}
sort($words);
echo utf8_encode(implode(',', $words)) . "\n";


?>