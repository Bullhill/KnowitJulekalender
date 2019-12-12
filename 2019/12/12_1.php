<?php

$startnum = 1;
$q = 0;
for($startnum = 1000; $startnum <= 9999; $startnum++)
{
	$i=0;
	$number = $startnum;
	while($number != 6174)
	{
		$number = sprintf('%04d', $number);
		$number = str_split($number);
		$trekkfra = $number;
		sort($trekkfra);
		rsort($number);
		$number = implode($number) - implode($trekkfra);
		if($number == 0)
		{
			break;
		}
		$i++;
	}
	if($i == 7)
		$q++;
}
echo $q . "\n";