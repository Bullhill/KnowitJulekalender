<?php

//$store = new Threaded();

class Task extends Threaded
{
	private $value;

	public function __construct(int $i)
	{
		$this->value = $i;
	}

	public function run()
	{
		global $s;
		
		for ($x = $this->value+1; $x <= $this->value + 10000; $x += 2) 
		{
			if(is_prime($x+1))
			{
				if(is_prime($x-1));
				{
					if(riking($x))
					{
						echo $x . "\n";
					}
				}
			}
		}
		//print_r($primes);
		//echo "Task: " . $this->value . "\n";
	}
}

# Create a pool of 4 threads
$pool = new Pool(32);
$s = array();
for ($i = 1; $i < 10000000; $i += 10000) 
{
	$pool->submit(new Task($i));
}

while ($pool->collect());


$pool->shutdown();

//print_r($store);






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
	for ($y = 1; $y <= $x/2; $y++) 
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
