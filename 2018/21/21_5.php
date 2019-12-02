<?php

echo "Finner primtall \n";
$primes = array();
for ($i = 1; $i < 100; $i += 2) 
{
	if(is_prime($i))
		$primes[] = $i;
}
echo count($primes) . " primtall funnet\n";
$last = 1;
echo "Finner sandwitchtall\n";
$sandwitched = array();
foreach($primes as $prime)
{
	if($prime - $last == 2)
	{
		$sandwitched[] = $prime-1;
	}
	$last = $prime;
}
echo count($sandwitched) . " tall funnet\n";
$sum = 0;
foreach($sandwitched as $sanded)
{
	if(riking($sanded))
	{
		$sum += $sanded;
		echo $sanded . "\n";
	}
}
echo $sum;
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
	$list = array();
	for ($i = 0; $i < $x/2; $i++) 
	{
		if($x % $i == 0)
		{
			$list[] = $i;
		}
	}
	if(array_sum($list) > $x)
		return true;
	else
		return false;
}


?>