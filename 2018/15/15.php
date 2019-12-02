<?php
$time_start = microtime(true);
$string = file_get_contents("./input-gullbursdag.txt", true);

$lines = explode("\n", $string);
$c = 0;

foreach($lines as $line)
{
	preg_match('/.*\.(\d\d?\d?\d?)/', $line, $matches);
	$i = ceil(sqrt($matches['1']));
	while(true)
	{
		$pow = pow($i,2);
		if($pow == $matches['1'] + $i)
		{
			$c++;
			break;
		}
		elseif($pow > $matches['1'] + $i)
		{
			break;
		}
		//echo $matches['1'] . " - " . $i . " - " . $pow . "\n";
		$i++;
	}
}

$time_end = microtime(true);
$time = round($time_end - $time_start, 4);
echo "fasit: " . $c . "\n";
echo "Time used: $time seconds\n";
?>