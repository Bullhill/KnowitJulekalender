<?php

$input = explode("\n", utf8_decode(file_get_contents("elves.txt")));

foreach($input as $linje)
{
	$alver[] = explode('@', $linje);
	
}

foreach($alver as $alv)
{
	$endealv = array_pop($alv);
	$liste[$endealv] = array();
	
}

foreach($alver as $alv)
{
	if(count($alv) > 1)
	{
		$endealv = array_pop($alv);
		while(true)
		{
			if(count($alv) === 0)
			{
				break;
			}
			
			$leder = array_pop($alv);
			if(array_key_exists($leder, $liste))
			{
				$liste[$leder][] = $endealv;
				break;
			}
		}
	}
}


$arbeider = 0;
$mellomleder = 0;
foreach($liste as $key => $alv)
{
	
	if(count($alv) === 0)
	{
		$arbeider++;
	}
	elseif(count($alv) === 1)
	{
		if(count($liste[$alv[0]]) === 0)
		{
			$mellomleder++;
		}
	}
	elseif(count($alv) > 1)
	{
		$mellomleder++;
	}
	
	
}


echo $arbeider . " - " . $mellomleder . " = " . ($arbeider-$mellomleder) . "\n";

?>