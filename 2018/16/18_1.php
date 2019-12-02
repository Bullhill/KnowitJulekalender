<?php

$content = file_get_contents('input-palindrom.txt', true);
$numbers = explode(',', $content);
$time_start = microtime(true);

foreach($numbers as $key => $number)
{
	$result = $number;
	$run = true;
	$i = 0;
	while($run)
	{
		$i++;
		if(check_palindrom($numbers, $key, $i))
		{
			$result += $numbers[$key-$i]*2;
			if(!isset($primes[$result]) && is_prime($result))
			{
				$primes[$result] = 'x';
			}
		}
		else
		{
			$run = false;
		}
	}
}

ksort($primes);
$time_end = microtime(true);
$time = round($time_end - $time_start, 4);

print_r($primes);

echo "Time used: $time seconds\n";
echo "Ram brukt: " . memory_get_peak_usage()/1000000 . "MB\n";



function check_palindrom($numbers, $key, $ledd)
{
	if($numbers[$key-$ledd] == $numbers[$key+$ledd])
	{
		return true;
	}
	else
	{
		return false;
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