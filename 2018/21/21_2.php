<?php

$start = microtime(true);
$max = 10000000;
$sum = 0;
$lasttime = 0;
for ($x = 1; $x <= $max; $x++) 
{
	if(is_prime($x-1))
	{
		if(is_prime($x+1))
		{
			if(riking($x))
			{
				//echo $x . "\n";
				$sum += $x;
			}
		}
	}
	if($x % 5000 == 0)
	{
		$time = round(microtime(true) - $start, 5);
		$numprsec = 500 / ($time - $lasttime);
		$lasttime = $time;
		echo "Progress: " . round($x / $max * 100, 2) . "% Nums pr sec: " . round($numprsec,0) . "                         \r";
	}
}

echo "\n" . $sum . "\n";
$end = microtime(true);
$time = round($end - $start, 5);
echo "Time used: $time sec\n";


function is_prime($number)
{
	// 1 is not prime
	if ( $number == 1 ) {
		return false;
	}
	// 2 is the only even prime number
	if ( $number == 2 ) {
		return true;
	}
	// square root algorithm speeds up testing of bigger prime numbers
	$x = sqrt($number);
	$x = floor($x);
	for ( $i = 2 ; $i <= $x ; ++$i ) {
		if ( $number % $i == 0 ) {
			break;
		}
	}
 
	if( $x == $i-1 ) {
		return true;
	} else {
		return false;
	}
}

function riking($x)
{
	$findings = array();
	for ($y = 1; $y <= $x-1; $y++) 
	{
		if($x / $y == floor($x / $y))
		{
			$findings[] = $y;
		}
	}
	$sum = 0;
	foreach($findings as $found)
	{
		$sum += $found;
	}
	if($sum > $x)
	{
		return true;
	}
	else
	{
		return false;
	}
}
?>