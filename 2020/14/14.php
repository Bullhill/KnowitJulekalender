<?php

$seq = array(0,1);
$seqc = array(0=>0,1=>1);


for($a = 2; $a <= 1800813; $a++)
{
	$mnum = $seq[count($seq)-2] - $a;
	$pnum = $seq[count($seq)-2] + $a;
	if($mnum > 0 && !isset($seqc[$mnum]))
	{
		$seq[] = $mnum;
		@$seqc[$mnum]++;
	}
	elseif($pnum > 0)
	{
		$seq[] = $pnum;
		@$seqc[$pnum]++;
	}
	
	
	
}
$primes = 0;

$i = 0;
foreach($seqc as $num => $count)
{
	if(isPrime($num))
	{
		$primes += $count;
	}
}
echo "\rPrimtall = " . $primes . "\n";

function isPrime($n) 
{
	if($n < 2) 
		return false;
	elseif($n == 2 || $n == 3) 
		return true;
	elseif($n % 2 == 0 || $n % 3 == 0) 
		return false;

	$sqrtN = sqrt($n) + 1;
	for($i = 6; $i <= $sqrtN; $i += 6) 
	{
		if($n % ($i - 1) == 0 || $n % ($i + 1) == 0) 
			return false;
	}
	return true;
}

?>