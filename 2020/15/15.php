<?php

$ordliste = explode("\n", file_get_contents('wordlist.txt'));
$testord = explode("\n", file_get_contents('riddles.txt'));


foreach($ordliste as $ord)
{
	$ordsjekk[$ord] = $ord;
}

foreach($testord as $test)
{
	list($forste, $andre) = explode(', ', $test);
	
	foreach($ordsjekk as $ord)
	{
		if(isset($ordsjekk[$forste . $ord]) && isset($ordsjekk[$ord . $andre]))
		{
			//echo $forste . " - " . $ordsjekk[$forste . $ord] . " - " . $ordsjekk[$ord . $andre] . " - " . $andre . " - " . substr($ordsjekk[$forste . $ord], strlen($forste)) .  "\n";
			$lim[$ord] = $ord;
		}
	}
}

$c = 0;
foreach($lim as $limord)
{
	$c += strlen(utf8_decode($limord));
}

echo "Fasit: " . $c . "\n"

?>