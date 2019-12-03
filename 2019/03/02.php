<?php

$pixels = 720720;
for($i = 350; $i< 2000; $i++)
{
	if($pixels/$i == floor($pixels/$i))
	{
		$potsize[] = array('h' => $pixels/$i, 'w' => $i);
	}
}
$file = file_get_contents("img.txt");
$file = str_split($file);
//print_r($_GET);
if(is_numeric($_GET['id']))
{
	$size = $potsize[$_GET['id']];
	$my_img = imagecreate($size['w'], $size['h']);
	$black = imagecolorallocate($my_img, 0, 0, 0); 
	$white = imagecolorallocate($my_img, 255, 255, 255); 
	foreach($file as $charno => $char)
	{
		if($char == 0)
		{
			imagesetpixel($my_img, $charno%$size['w'],floor($charno/$size['w']), $white);
		}
	}
	
	//id = 70
	
	
	header('Content-Type: image/png');
	imagepng($my_img);
}
else
{
	foreach($potsize as $id => $size)
	{
		echo $size['w'] . "x" . $size['h'] . "<br>";
		echo '<img src="02.php?id=' . $id . '" alt="Smiley face" height="' . $size['h'] . '" width="' . $size['w'] . '"> <br>';
	}
}