<?php
include 'primes.php';

$alver = array('0' => 0,'1' => 0,'2' => 0,'3' => 0,'4' => 0);
$add = 1;
$curalv = 4;

$debug = 1000000;


$step = 1000740;
//$step = 62;


for($s = 1; $s <= $step;$s++)
{
	//regel 1
	if(in_array($s, $primenums))
	{
		asort($alver);
		// echo "Prime!\n";
		$alvkey = array_keys($alver);
		// echo $alver[$alvkey[0]] . " - " .  $alver[$alvkey[1]] . "\n";
		if($alver[$alvkey[0]] != $alver[$alvkey[1]])
		{
			/*print_r($alvkey);
			echo $alvkey[0];
			print_r($alver);*/
			doWork(1, ($alvkey[0]));
			goto loopend;
		}
	}
	
	//regel 2
	if($s%28 == 0)
	{
		if($add == 1)
			$add = -1;
		else
			$add = 1;
		doWork(2);
		goto loopend;
	}
	
	//regel 3
	if($s%2 == 0)
	{
		$nextalv = (5+$curalv+$add)%5;
		
		asort($alver);
		$alvkey = array_keys($alver);
		if($alver[$alvkey[3]] != $alver[$alvkey[4]] && $nextalv == $alvkey[4])
		{
			$curalv = (5+$curalv+$add)%5;
			doWork(3);
			goto loopend;
		}
	}
	
	//Regel 4
	if($s%7 == 0)
	{
		$curalv = 4;
		doWork(4,4);
		goto loopend;
	}
	
	
	
	
	//Regel 5
	doWork(5);
	
	
	loopend:
	ksort($alver);
	/*print_r($alver);
	echo "add: " . $add . "\n";
	echo "Curalv: " . $curalv . "\n";
	readline("Trykk en tast");*/
	
}


//print_r($alver);
Echo "Svar: " . (max($alver)-min($alver)) . "\n";

function doWork($rule, $next = -1)
{
	global $alver;
	global $add;
	global $curalv;
	global $s;
	global $debug;
	if($next == -1)
	{
		$curalv = (5+$curalv+$add)%5;
	}
	else
	{
		$curalv = $next;
	}
	$alver[$curalv]++;
	if($s%$debug == 0)
		echo "Alv " . $curalv . " gjør steg " . $s . " Regel " . $rule . "\n";
}


?>