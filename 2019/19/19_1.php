<?php

$sum = 0;
$max = 123454321;
//$max = 100;
for($i=1;$i<=$max;$i++)
{
	if(strrev($i) != $i)
	{
		$check = $i+strrev($i);
		if(strrev($check) == $check)
		{
			$sum += $i;
		}
	}
	if($i%1000000 == 0)
		echo "\rCurloc: " . $i;
}

echo "\rSvar: " . $sum . "\n";


?>