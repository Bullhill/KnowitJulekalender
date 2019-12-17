<?php
$t = array();
for($n=0;count($t)<=1000000;$n++)
{
	$tn2 = $n * (($n+1)/2);
	if(floor($tn2)== $tn2)
	{
		$t[] = $tn2;
	}
}
$c = array();
$i = 0;
$f = 0;
foreach($t as $num)
{
	$found = false;
	for($i=0; $i< strlen($num);$i++)
	{
		$canum = array();
		$anum = str_split($num);
		for($l = 0; $l<strlen($num);$l++)
		{
			$canum[] = $anum[($i+$l)%strlen($num)];
		}
		$cnum = implode($canum);
		$sqrt = sqrt($cnum);
		if(floor($sqrt) == $sqrt)
		{
			$c[$num] = 1;
		}
		$f++;
	}
}
echo "forsøk: ". $f . " restultat: " . count($c) . "\n";
?>