<?php

$file = file_get_contents('numbers.txt');
$nums = explode(',',$file);

$total = 100000*(100000+1)/2;

foreach($nums as $num)
{
	$total -= $num;
}

echo $total . "\n";

?>