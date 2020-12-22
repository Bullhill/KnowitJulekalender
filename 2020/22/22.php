<?php

$input = explode("\n", utf8_decode(file_get_contents("input.txt")));

foreach($input as $key => $linje)
{
	preg_match('/(.*) \[(.*)\]/', $linje, $matches);
	
	$tekst = $matches[1];
	$navnliste = explode(', ', $matches[2]);
	
	foreach($navnliste as $navn)
	{
		
		
		$bokstaver = str_split(strtolower($navn));
		
		$pos = -1;
		$funnet = true;
		$poshist = array();
		foreach($bokstaver as $bokstav)
		{
			$pos = strpos($tekst, $bokstav, $pos+1);
			
			$poshist[] = $pos;
			
			if($pos === false)
			{
				$funnet = false;
				break;
			}
		}
		
		if($funnet)
		{
			$tekst = str_split($tekst);
			foreach($poshist as $pos)
			{
				unset($tekst[$pos]);
			}
			$tekst = implode('', $tekst);
			@$liste[$key]++;
		}
		
	}
}

arsort($liste);

foreach($liste as $key => $c)
{
	echo $key . " har flest treff med " . $c . "\n";
	die;
}