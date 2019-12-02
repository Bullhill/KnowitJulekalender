<?php

$string = file_get_contents("./input.spp", true);

$commands = str_split($string);
$stack = array();
$endcomment = true;
foreach($commands as $command)
{
	if($endcomment && $command == " ")
	{
		$stack[count($stack)] = 31;
	}
	elseif($endcomment && $command == ":")
	{
		$sum = 0;
		foreach($stack as $stacktmp)
		{
			$sum += $stacktmp;
		}
		$stack = array($sum);
	}
	elseif($endcomment && $command == "|")
	{
		$stack[count($stack)] = 3;
	}
	elseif($endcomment && $command == "'")
	{
		$sum = $stack[count($stack)-1]+$stack[count($stack)-2];
		$stack[count($stack)-2] = $sum;
		unset($stack[count($stack)-1]);
	}
	elseif($endcomment && $command == ".")
	{
		$A = $stack[count($stack)-1];
		$B = $stack[count($stack)-2];
		unset($stack[count($stack)-1]);
		unset($stack[count($stack)-1]);
		
		$stack[count($stack)] = $A - $B;
		$stack[count($stack)] = $B - $A;
		
	}
	elseif($endcomment && $command == "_")
	{
		$A = $stack[count($stack)-1];
		$B = $stack[count($stack)-2];
		unset($stack[count($stack)-1]);
		unset($stack[count($stack)-1]);
		
		$stack[count($stack)] = $A * $B;
		$stack[count($stack)] = $A;
		
	}
	elseif($endcomment && $command == "/")
	{
		unset($stack[count($stack)-1]);
	}
	elseif($endcomment && $command == "i")
	{
		$stack[count($stack)] = $stack[count($stack)-1];
	}
	elseif($endcomment && $command == '\\')
	{
		$sum = $stack[count($stack)-1];
		$sum++;
		$stack[count($stack)-1] = $sum;
	}
	elseif($endcomment && $command == "*")
	{
		$A = $stack[count($stack)-1];
		$B = $stack[count($stack)-2];
		unset($stack[count($stack)-1]);
		unset($stack[count($stack)-1]);
		
		$sum = $A / $B;
		if($sum > 0)
		{
			$stack[count($stack)] = floor($sum);
		}
		else
		{
			$stack[count($stack)] = ceil($sum);
		}
	}
	elseif($endcomment && $command == "]")
	{
		$val = $stack[count($stack)-1];
		unset($stack[count($stack)-1]);
		if($val/2 == floor($val/2))
		{
			$stack[count($stack)] = 1;
		}
	}
	elseif($endcomment && $command == "~")
	{
		$vals[0] = $stack[count($stack)-1];
		unset($stack[count($stack)-1]);
		$vals[1] = $stack[count($stack)-1];
		unset($stack[count($stack)-1]);
		$vals[2] = $stack[count($stack)-1];
		unset($stack[count($stack)-1]);
		
		$stack[count($stack)] = max($vals);
		
		
	}
	elseif($command == "K")
	{
		$endcomment = false;
	}
	elseif($command == "\n")
	{
		$endcomment = true;
	}
	elseif(!$endcomment)
	{
		
	}
	else
	{
		echo "Unknown command '" . $command . "'\n";
		print_r($stack);
		die;
	}
}
print_r($stack);

?>