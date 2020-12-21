<?php

$input = explode("\n", utf8_decode(file_get_contents("input.txt")));

$pasienter = array(1 => array(), 2 => array(), 3 => array(), 4 => array(), 5 => array());
$c = 0;
foreach($input as $linje)
{
	if($linje == "---")
	{
		behandle();
	}
	else
	{
		list($navn, $prioritet) = explode(",", $linje);
		$pasienter[$prioritet][] = $navn;
	}
}

while(count($pasienter[1])+count($pasienter[2])+count($pasienter[3])+count($pasienter[4])+count($pasienter[5]) > 0)
{
	behandle();
}

function behandle()
{
	global $pasienter;
	global $c;
	
	if(count($pasienter[1]) > 0)
		$prioritet = 1;
	elseif(count($pasienter[2]) > 0)
		$prioritet = 2;
	elseif(count($pasienter[3]) > 0)
		$prioritet = 3;
	elseif(count($pasienter[4]) > 0)
		$prioritet = 4;
	elseif(count($pasienter[5]) > 0)
		$prioritet = 5;
	
	$behandles = array_shift($pasienter[$prioritet]);
	
	if($behandles == "Claus")
	{
		echo "Ventetid: " . $c . "\n";
		die;
	}
	
	$c++;
}

?>