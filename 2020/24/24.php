<?php
$file = fopen("rute.txt", "r");
$mat = 10;
$c = 0;
while($mat > 0){
	if(fread($file, 1) == 1)
		$mat++;
	else
		$mat--;
	$c++;}
echo "\n" . $c . "\n";