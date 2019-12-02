<?php
$n = 0;
$list = array(
	'A' => 1,
	'B' => 2,
	'C' => 3,
	'D' => 4,
	'E' => 5,
	'F' => 6,
	'G' => 7,
	'H' => 8,
	'I' => 9,
	'J' => 10,
	'K' => 11,
	'L' => 12,
	'M' => 13,
	'N' => 14,
	'O' => 15,
	'P' => 16,
	'Q' => 17,
	'R' => 18,
	'S' => 19,
	'T' => 20,
	'U' => 21,
	'V' => 22,
	'W' => 23,
	'X' => 24,
	'Y' => 25,
	'Z' => 26,
	'1' => 27,
	'2' => 28,
	'3' => 29);
	
calc('GODJULOGGODTNYTT3R');




function calc($input)
{
	global $list;
	$l = 1;
	$sum = 0;
	$str = str_split($input);
	$str = array_reverse($str);
	foreach($str as $chr)
	{
		$sum += pow(29, ($l-1)) * ($list[$chr]);
		$l++;
	}

	var_dump($sum);
	echo "\n";
	echo $input . ": " . number_format($sum, 0, '', '') . "\n";
}
?>