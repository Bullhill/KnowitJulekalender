<?php

$alfabet = array(2,3);
$alfabet = array(2, 3, 5, 7, 11);

$n = 1;
$list = array(2);
$res = 0;
$q = 0;
while(true)
{
	$add = $alfabet[$n%count($alfabet)];
	$qty = $list[$n-1];
	unset($list[$n-1]);
	for($i=0;$i<$qty;$i++)
	{
		$list[] = $add;
		if($add == 7)
			$res++;
		$q++;
		if(count($list)+1 == 217532235)
		{
			break;
		}
	}
	$n++;
	
	if(count($list)+1 >= 217532235)
		break;
}
//unset($list[0]);
//echo implode(', ', $list) . "\n";
//print_r($list);
echo $res*7 . "\n";

?>