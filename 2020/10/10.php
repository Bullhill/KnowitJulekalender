<?php


$file = file_get_contents("leker.txt");

$leker = explode("\n", $file);

foreach($leker as $lek)
{
	$lekalver = explode(",", $lek);
	$poeng = count($lekalver);
	foreach($lekalver as $plass => $lekalv)
	{
		@$alver[$lekalv] += $poeng - $plass-1;
	}
}
arsort($alver);
foreach($alver as $alv => $poeng)
{
	echo $alv . "-" . $poeng . "\n";
	die;
}