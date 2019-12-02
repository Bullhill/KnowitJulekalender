<?php

//214723 Feil

$time_start = microtime(true);
$content = file_get_contents('input-palindrom.txt', true);
$numbers = explode(',', $content);

foreach($numbers as $key => $number)
{
	$result = 0;
	$result = check_palindrom($numbers, $key, 1);
	if($result != 0)
	{
		$result += $number;
		//echo $number . "\n";
		//echo "resultat: " . $result . "\n";
		if(is_prime($result))
		{
			$primes[$result] = "";
			//echo "found: " . $result . "\n";
		}
	}
	if($key % 50000 == 0)
		echo "progress :" .  round($key / count($numbers)*100, 2) . "\r";
	
	
	/*if($key == 50000)
		die;*/
}

ksort($primes);

$time_end = microtime(true);
$time = round($time_end - $time_start, 4);

print_r($primes);

echo "Time used: $time seconds\n";

function check_palindrom($numbers, $key, $ledd)
{
	if($numbers[$key-$ledd] == $numbers[$key+$ledd])
	{
		if(is_prime($numbers[$key] + ))
		//echo $ledd . " found!\n";
		$result = check_palindrom($numbers, $key, $ledd+1);
		//echo $numbers[$key-$ledd] . ",";
		return $result += $numbers[$key-$ledd]*2;
	}
	else
	{
		return 0;
	}
}

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

?>