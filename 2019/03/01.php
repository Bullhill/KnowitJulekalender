<?php

$pixels = 720720;
for($i = 100; $i< 6000; $i++)
{
	if($pixels/$i == floor($pixels/$i))
	{
		$potsize[] = array('h' => $pixels/$i, 'w' => $i);
	}
}

//print_r($potsize);
$file = file_get_contents("img.txt");
$file = str_split($file);

echo '<html><body>';

foreach($potsize as $size)
{
	foreach($file as $charno => $char)
	{
		if(($charno)%$size['w'] == 0)
		{
			echo "<br>";
		}
		if($char = 1)
		{
			echo '<span style="background-color: #000000; color: #000000">1</span>';
		}
		else
		{
			echo '<span style="background-color: #FFFFFF; color: #FFFFFF">0</span>';
		}
	}
	die;
}

echo '</html></body>';

*/