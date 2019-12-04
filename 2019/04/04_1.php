<?php

/*for($y = 0; $y < 1000; $y++)
{
	for($x = 0; $x < 1000; $y++)
	{
		$map[$y][$x] = 0;
	}
}*/



$file = file_get_contents("coords.csv");

$lines = explode("\n",$file);

//$lines = array('1,3', '1,0', '3,2');


$curpos = array('x' => 0, 'y' => 0);

foreach($lines as $line)
{
	list($goy, $gox) = explode(",", $line);
	
	//Gå y (Vertikalt)
	if($curpos['y'] > $goy)
	{
		for(;$curpos['y'] > $goy; $curpos['y']--)
		{
			@$map[$curpos['y']][$curpos['x']] = $map[$curpos['y']][$curpos['x']] + 1;
		}
	}
	elseif($curpos['y'] < $goy)
	{
		for(;$curpos['y'] < $goy; $curpos['y']++)
		{
			@$map[$curpos['y']][$curpos['x']] = $map[$curpos['y']][$curpos['x']] + 1;
		}
	}
	//Gå x (horisontalt)
	if($curpos['x'] > $gox)
	{
		for(;$curpos['x'] > $gox; $curpos['x']--)
		{
			@$map[$curpos['y']][$curpos['x']] = $map[$curpos['y']][$curpos['x']] + 1;
		}
	}
	elseif($curpos['x'] < $gox)
	{
		for(;$curpos['x'] < $gox; $curpos['x']++)
		{
			@$map[$curpos['y']][$curpos['x']] = $map[$curpos['y']][$curpos['x']] + 1;
		}
	}
	
	
}


$tid = 0;
foreach($map as $rowno => $row)
{
	foreach($row as $colno => $col)
	{
		//echo $colno . " " . $rowno . "\n";
		for($i=1;$i <= $col; $i++)
		{
			$tid += $i;
		}
	}
	$max[] = max($row);
}

$max = max($max);
//echo $max;


$my_img = imagecreate(1000, 1000);
$black = imagecolorallocate($my_img, 0, 0, 0); 

for($i = 1; $i <= $max; $i++)
{
	$shade = round(((255/$max)*$i),0);
	$white[$i] = imagecolorallocate($my_img, $shade , $shade, $shade);
}
$red = imagecolorallocate($my_img, 255 , 0, 0);

//print_r($white);

$white = imagecolorallocate($my_img, 255, 255, 255); 
for($x = 0; $x< 1000;$x++)
//foreach($map as $rowno => $row)
{
	for($y = 0; $y< 1000;$y++)
	{
		if(isset($map[$y][$x]))
		{
			//echo $x . " " . $y . "found!\n";
			//echo "color: " . $map[$y][$x] . "\n";
			imagesetpixel($my_img, $x,$y, $map[$y][$x]);
		}
	}
}


imagefttext ($my_img, 15, 0, 750,980, $red, '/usr/share/fonts/truetype/dejavu/DejaVuSans.ttf', 'Time used: ---Min');

header('Content-Type: image/png');
imagepng($my_img);

//echo $tid . "\n";

//print_r($map);




?>