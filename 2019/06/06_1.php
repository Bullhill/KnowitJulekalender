<?php

$org = imagecreatefrompng('mush.png');
$width = imagesx($org);
$height = imagesy($org);

$new = imagecreate($width, $height);
$colors = imagecolorallocate($new, 0, 0, 0);


$b = sprintf('%024b', 0);

for($y = $height-1; $y >= 0; $y--) 
{
	for($x = $width-1; $x > 0; $x--) 
	{
		$rgb = imagecolorat($org, $x, $y);
		$a = sprintf('%024b', $rgb);
		
		
		$res = doxor($a, $b);
		
		list($rb, $bb, $gb) = str_split($res, 8);
		$image[$y][$x] = array(bindec($rb), bindec($bb), bindec($gb));
		$color[$y][$x] = imagecolorallocate($new, bindec($rb), bindec($bb), bindec($gb));
		imagesetpixel($new, $x,$y, bindec($res));
		$b = $a;
	}
}

header('Content-Type: image/png');
imagepng($new);


function doxor($text,$key){
	for($i=0; $i<strlen($text); $i++){
        $text[$i] = intval($text[$i])^intval($key[$i]);
    }
    return $text;
}

?>