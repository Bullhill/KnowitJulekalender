<?php

$slektstre = file_get_contents("family.txt");

//$slektstre = 'Alvor (Alv Alf Alvaro (Halfrid Halvar Halvard (Alvilde Alva (Alfie Alvor Joralv) Alfonse)) Calvin (Tjalve Alvbert Alvard))';

$slektstre = str_replace(' (', '(', $slektstre);
$slektstre = str_replace(') ', ')', $slektstre);

$slektstre = str_split($slektstre);

$cp = 0;
$name = "";
//$result = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
slekt(0);



function slekt($level)
{
	global $slektstre;
	global $cp;
	global $result;
	global $name;
	while(count($slektstre) > $cp)
	{
		$cc = $slektstre[$cp];
		$cp++;
		if($cc == "(")
		{
			@$result[$level]++;
			//echo $cp . "-" . $level . $name . " - jump\n";
			slekt($level+1);
		}
		elseif($cc == " ")
		{
			@$result[$level]++;
			//echo $cp . "-" . $level . $name . " - new\n";
			$name = "";
		}
		elseif($cc == ")")
		{
			if($name != "")
			{
				@$result[$level]++;
				//echo $cp . "-" . $level . $name . " - return\n";
				$name = "";
			}
			return;
		}
		else
		{
			$name .= $cc;
		}
	}
}

arsort($result);

foreach($result as $echo)
{
	echo $echo . "\n";
	die;
}

print_r($result);

