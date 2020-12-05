<?php


$rute = file_get_contents("rute.txt");
//$rute = "HHOOVVNN";
$rute = "HHHHHHOOOOVVNNNVVOVVNN";

$x = 0;
$y = 0;


$moves = str_split($rute);

foreach($moves as $key => $move)
{
	if($move == 'H')
		$x++;
	elseif($move == 'V')
		$x--;
	elseif($move == 'O')
		$y++;
	elseif($move == 'N')
		$y--;
	
	//echo $moves[$key+1] . " - " . $move;
	if($moves[$key+1] != $move)
		echo $x . "," . $y . "\n";
}


?>