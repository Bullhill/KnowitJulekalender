<?php
$limit = 98765432;
$c = 0;

for($i=1;$i<=strlen($limit)*9;$i++)
{
	if(is_prime($i))
		$primenums[] = $i;
}

for($i = 1; $i <= $limit; $i++)
{
	$nums = str_split($i);
	$sum = 0;
	foreach($nums as $num)
	{
		$sum += $num;
	}
	
	if(in_array($sum, $primenums) && $i % $sum == 0)
		$c++;
	
	if($i % 500000 == 0)
		echo "\r" . $i ;
}
echo "\rSvar: " . $c . "\n";

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