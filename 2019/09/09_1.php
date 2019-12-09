<?php

$file = file_get_contents('krampus.txt');

$numbers = explode("\n", $file);
$sum = 0;
foreach($numbers as $number)
//for($number = 1; $number < 1000000001; $number++)
{
	$sqrt = $number;
	$number = $sqrt*$sqrt;
	if($sqrt == floor($sqrt))
	{
		$chars = str_split($number);
		$charcount = count($chars);
		for($i = 1; $i <= $charcount-1; $i++)
		{
			$chars = str_split($number, $i);
			$a = $chars[0];
			unset($chars[0]);
			$b = implode($chars);
			if($a + $b == $sqrt && $b != 0)
			{
				echo $number . "\t" . $charcount . " - ";
				echo $i . ") ";
				echo $a . "+" . $b . "=" . ($a+$b) . " \tSQRT = " . $sqrt . "\n";
				$sum += $sqrt;
			}
			
		}
	}
	else
	{
		//echo "Problem: " . $number . "=" . $sqrt . "\n";
	}
}

echo "Fasit = " . $sum . "\n"
?>