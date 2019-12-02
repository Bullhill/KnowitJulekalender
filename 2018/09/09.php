<?php

$string = file_get_contents('./input-hashchain.json', true);

$array = json_decode($string, true);

$true = true;

$hash = md5('julekalender');
while($true)
{
	foreach($array as $key => $value)
	{
		if(md5($hash . $value['ch']) == $value['hash'])
		{
			echo $value["ch"];
			unset($array[$key]);
			$hash = $value['hash'];
			break;
		}
	}
	if(count($array) == 0)
	{
		$true = false;
	}
}
echo "\n";
?>