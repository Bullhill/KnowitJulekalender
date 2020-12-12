<?php

$numtochar = array('0' => 'a', '1' => 'b', '2' => 'c', '3' => 'd', '4' => 'e', '5' => 'f', '6' => 'g', '7' => 'h', '8' => 'i', '9' => 'j', '10' => 'k', '11' => 'l', '12' => 'm', '13' => 'n', '14' => 'o', '15' => 'p', '16' => 'q', '17' => 'r', '18' => 's', '19' => 't', '20' => 'u', '21' => 'v', '22' => 'w', '23' => 'x', '24' => 'y', '25' => 'z');
$chartonum = array('a' => '0', 'b' => '1', 'c' => '2', 'd' => '3', 'e' => '4', 'f' => '5', 'g' => '6', 'h' => '7', 'i' => '8', 'j' => '9', 'k' => '10', 'l' => '11', 'm' => '12', 'n' => '13', 'o' => '14', 'p' => '15', 'q' => '16', 'r' => '17', 's' => '18', 't' => '19', 'u' => '20', 'v' => '21', 'w' => '22', 'x' => '23', 'y' => '24', 'z' => '25');

$hints = file_get_contents("hint.txt");

$list = explode("\n", $hints);

//$list = array('juletre');

$password = "eamqia";
$passlen = strlen($password);
foreach($list as $chint)
{
	if($passlen <= strlen($chint))
	{
		$hint = str_split($chint);
		$nchar[0] = $hint;
		$l = 1;
		while(count($hint) > 1)
		{
			$last = $hint;
			array_shift($hint);
			$nchar[$l] = array();
			
			
			
			foreach($hint as $key => $char)
			{
				$nchar[$l][] = $numtochar[($chartonum[$char]+1+$chartonum[$last[$key]])%26];
			}
			$hint = $nchar[$l];
			$l++;
		}
		
		for($i = 0; $i <= count($nchar[0])-1; $i++)
		{
			$check = "";
			if($passlen <= count($nchar[$i]))
			{
				for($l = 0; $l < count($nchar[$i]); $l++)
				{	
					$check .= $nchar[$l][$i];
				}
				if(strpos($check, $password) !== false)
				{
					echo $chint . " = " . $check . "\n";
					die;
				}
			}
		}
	}
}
?>