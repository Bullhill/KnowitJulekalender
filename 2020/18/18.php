<?php

$words = explode("\n", utf8_decode(file_get_contents("wordlist.txt")));

// $words = array('eple', 'gnisning', 'kauka', 'regninger', 'ergre', 'baluba', 'tarotkorta','רlרlרר', 'abab');

$c = array();
foreach($words as $word)
{
	
	$chars = str_split($word);
	$len = strlen($word);
	$center = ceil((strlen($word)) / 2 -1);
	
	if(strlen($word) % 2)
		$poffset = 0;
	else
		$poffset = 1;
	
	
	if(strlen($word) <= 2)
	{
		// echo $word . " - for kort ord\n";
	}
	elseif(palidorm_sjekk($chars))
	{
		// echo $word . " - er ett palidorm\n";
	}
	else
	{
		if($len % 2 == 0 && $chars[$center] != $chars[$center + $poffset])
		{
			$start = 1;
		}
		else
		{
			$start = 0;
		}
		if(sjekk_ut(0))
		{
			$c[$word] = $word;
			
		}
		elseif(sjekk_ut(1))
		{
			$c[$word] = $word;
			
		}
	}
}

echo count($c) . "\n";

function sjekk_ut($pos)
{
	global $word;
	global $chars;
	global $len;
	global $center;
	global $poffset;
	if($center-$pos == -1)
	{
		return true;
	}
	elseif($chars[$center-$pos] == $chars[$center + $poffset + $pos])
	{
		return sjekk_ut($pos+1);
	}
	elseif(isset($chars[$center-$pos-1]) && $chars[$center-$pos] == $chars[$center + $poffset + $pos+1] && $chars[$center-$pos-1] == $chars[$center + $poffset + $pos])
	{
		return sjekk_ut($pos+2);
	}
	else
	{
		return false;
	}
	
}

function palidorm_sjekk($chars)
{
	$rchars = $chars;
	krsort($rchars);
	if(implode('', $chars) == implode('', $rchars))
		return true;
	else
		return false;
}


?>