<?php

$file = file_get_contents("names.txt");

$fileparts = explode("\n---\n",$file);

$names['FM'] = explode("\n", $fileparts[0]);
$names['FF'] = explode("\n", $fileparts[1]);
$names['LF'] = explode("\n", $fileparts[2]);
$names['LL'] = explode("\n", $fileparts[3]);

$file = file_get_contents("employees.csv");

$lines = explode("\n", $file);

for($l = 1; $l<count($lines)-1;$l++)
{
	$employees[] = explode(",", $lines[$l]);
}

//$employees = array(array('Jan', 'Johannsen', 'M'));

foreach($employees as $ansatt)
{
	//echo $ansatt[0] . "," . $ansatt[1] . "," . $ansatt[2] . " - ";
	
	//Firstname
	$chars = str_split($ansatt[0]);
	$sum = 0;
	foreach($chars as $char) 
	{
		$sum += ord($char);
	}
	$kjonnvalg = "F" . $ansatt[2];
	$firstname = $names[$kjonnvalg][$sum%count($names[$kjonnvalg])];
	
	//Lastname
	
	$namesplit = str_split($ansatt[1], (ceil(strlen($ansatt[1])/2)));
	
	$chars = str_split(strtolower(str_replace(" ", "", str_replace("'", "", $namesplit[0]))));
	$sum = 0;
	foreach($chars as $char)
	{
		$sum += (ord($char) - 96);
	}
	$lastname = $names['LF'][$sum%count($names['LF'])];
	
	
	$chars = str_split($namesplit[1]);
	$sum = 1;
	foreach($chars as $char) 
	{
		$sum = $sum * ord($char);
	}
	if($ansatt[2] == "F")
		$multiply = strlen($ansatt[1].$ansatt[2]);
	else
		$multiply = strlen($ansatt[0]);
	
	$sum = $sum * $multiply;
	
	$nums = str_split($sum);
	rsort($nums);
	$sum = implode($nums);
	
	$lastname .= $names['LL'][$sum%count($names['LL'])];
	
	@$result[$firstname." ".$lastname]++;
	
}

foreach($result AS $key => $num)
{
	if($num == 4)
	{
		echo $key . "\n";
	}
}

?>