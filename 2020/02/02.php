<?php

$rage = 0;
$levert = 0;
$pakker = 5433000;
//$pakker = 10000;

for($i=0; $i <= $pakker; $i++)
{
	if($rage == 0)
	{
		$arr = str_split($i);
		foreach($arr as $n)
		{
			if($n == 7)
			{
				$rage = lastprime($i)+1;
			}
		}
	}
	
	if($rage > 0)
	{
		//echo "Kast pakke " . $i . "\n";
		$rage--;
	}
	else
	{
		$levert++;
		echo "\r" . $i;
	}
}

echo "\nLevert: " . $levert . "\n";


function lastprime($num)
{
	$cn = $num;
	while(!primeCheck($cn))
	{
		$cn--;
	}
	return($cn);
}

function primeCheck($number){ 
    if ($number == 1) 
    return 0; 
    for ($i = 2; $i <= $number/2; $i++){ 
        if ($number % $i == 0) 
            return 0; 
    } 
    return 1; 
}

?>