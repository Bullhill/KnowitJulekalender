<?php

$lines = explode("\n", str_replace(' ', 's', file_get_contents("kart.txt")));


foreach($lines as $key => $linje)
{
	$kart[$key] = str_split($linje);
}

$im = imagecreatetruecolor(4130, 3484);
$redcolor = imagecolorallocate($im, 255, 0, 0);
$greencolor = imagecolorallocate($im, 0, 255, 0);
$bluecolor = imagecolorallocate($im, 0, 0, 255);

foreach($kart as $y => $linje)
{
	foreach($linje as $x => $pixel)
	{
		
		if(	
			isset($kart[$y-3][$x-3]) && isset($kart[$y+3][$x+3]) && 
																	$kart[$y-3][$x-1] != "x" && $kart[$y-3][$x+0] != "x" && $kart[$y-3][$x+1] != "x" &&
										$kart[$y-2][$x-2] != "x" && $kart[$y-2][$x-1] != "x" && $kart[$y-2][$x+0] != "x" && $kart[$y-2][$x+1] != "x" && $kart[$y-2][$x+2] != "x" &&
			$kart[$y-1][$x-3] != "x" && $kart[$y-1][$x-2] != "x" && $kart[$y-1][$x-1] != "x" && $kart[$y-1][$x+0] != "x" && $kart[$y-1][$x+1] != "x" && $kart[$y-1][$x+2] != "x" && $kart[$y-1][$x+3] != "x" &&
			$kart[$y+0][$x-3] != "x" && $kart[$y+0][$x-2] != "x" && $kart[$y+0][$x-1] != "x" && $kart[$y+0][$x+0] != "x" && $kart[$y+0][$x+1] != "x" && $kart[$y+0][$x+2] != "x" && $kart[$y+0][$x+3] != "x" &&
			$kart[$y+1][$x-3] != "x" && $kart[$y+1][$x-2] != "x" && $kart[$y+1][$x-1] != "x" && $kart[$y+1][$x+0] != "x" && $kart[$y+1][$x+1] != "x" && $kart[$y+1][$x+2] != "x" && $kart[$y+1][$x+3] != "x" &&
										$kart[$y+2][$x-2] != "x" && $kart[$y+2][$x-1] != "x" && $kart[$y+2][$x+0] != "x" && $kart[$y+2][$x+1] != "x" && $kart[$y+2][$x+2] != "x"&&
																	$kart[$y+3][$x-1] != "x" && $kart[$y+3][$x+0] != "x" && $kart[$y+3][$x+1] != "x")
		{
			if($kart[$y-4][$x-4] == "s")
				$kart[$y-4][$x-4] = "k";
			if($kart[$y-4][$x-3] == "s")
				$kart[$y-4][$x-3] = "k";
			if($kart[$y-4][$x-2] == "s")
				$kart[$y-4][$x-2] = "k";
			if($kart[$y-4][$x+2] == "s")
				$kart[$y-4][$x+2] = "k";
			if($kart[$y-4][$x+3] == "s")
				$kart[$y-4][$x+3] = "k";
			if($kart[$y-4][$x+4] == "s")
				$kart[$y-4][$x+4] = "k";
			
			if($kart[$y-3][$x-4] == "s")
				$kart[$y-3][$x-4] = "k";
			if($kart[$y-3][$x-3] == "s")
				$kart[$y-3][$x-3] = "k";
			if($kart[$y-3][$x-2] == "s")
				$kart[$y-3][$x-2] = "k";
			if($kart[$y-3][$x-1] == "s")
				$kart[$y-3][$x-1] = "k";
			if($kart[$y-3][$x-0] == "s")
				$kart[$y-3][$x-0] = "k";
			if($kart[$y-3][$x+1] == "s")
				$kart[$y-3][$x+1] = "k";
			if($kart[$y-3][$x+2] == "s")
				$kart[$y-3][$x+2] = "k";
			if($kart[$y-3][$x+3] == "s")
				$kart[$y-3][$x+3] = "k";
			if($kart[$y-3][$x+4] == "s")
				$kart[$y-3][$x+4] = "k";
				
			if($kart[$y-2][$x-4] == "s")
				$kart[$y-2][$x-4] = "k";
			if($kart[$y-2][$x-3] == "s")
				$kart[$y-2][$x-3] = "k";
			if($kart[$y-2][$x-2] == "s")
				$kart[$y-2][$x-2] = "k";
			if($kart[$y-2][$x-1] == "s")
				$kart[$y-2][$x-1] = "k";
			if($kart[$y-2][$x-0] == "s")
				$kart[$y-2][$x-0] = "k";
			if($kart[$y-2][$x+1] == "s")
				$kart[$y-2][$x+1] = "k";
			if($kart[$y-2][$x+2] == "s")
				$kart[$y-2][$x+2] = "k";
			if($kart[$y-2][$x+3] == "s")
				$kart[$y-2][$x+3] = "k";
			if($kart[$y-2][$x+4] == "s")
				$kart[$y-2][$x+4] = "k";
				
			if($kart[$y-1][$x-3] == "s")
				$kart[$y-1][$x-3] = "k";
			if($kart[$y-1][$x-2] == "s")
				$kart[$y-1][$x-2] = "k";
			if($kart[$y-1][$x-1] == "s")
				$kart[$y-1][$x-1] = "k";
			if($kart[$y-1][$x-0] == "s")
				$kart[$y-1][$x-0] = "k";
			if($kart[$y-1][$x+1] == "s")
				$kart[$y-1][$x+1] = "k";
			if($kart[$y-1][$x+2] == "s")
				$kart[$y-1][$x+2] = "k";
			if($kart[$y-1][$x+3] == "s")
				$kart[$y-1][$x+3] = "k";
				
			if($kart[$y-0][$x-3] == "s")
				$kart[$y-0][$x-3] = "k";
			if($kart[$y-0][$x-2] == "s")
				$kart[$y-0][$x-2] = "k";
			if($kart[$y-0][$x-1] == "s")
				$kart[$y-0][$x-1] = "k";
			if($kart[$y-0][$x-0] == "s")
				$kart[$y-0][$x-0] = "k";
			if($kart[$y-0][$x+1] == "s")
				$kart[$y-0][$x+1] = "k";
			if($kart[$y-0][$x+2] == "s")
				$kart[$y-0][$x+2] = "k";
			if($kart[$y-0][$x+3] == "s")
				$kart[$y-0][$x+3] = "k";
				
			if($kart[$y+1][$x-3] == "s")
				$kart[$y+1][$x-3] = "k";
			if($kart[$y+1][$x-2] == "s")
				$kart[$y+1][$x-2] = "k";
			if($kart[$y+1][$x-1] == "s")
				$kart[$y+1][$x-1] = "k";
			if($kart[$y+1][$x-0] == "s")
				$kart[$y+1][$x-0] = "k";
			if($kart[$y+1][$x+1] == "s")
				$kart[$y+1][$x+1] = "k";
			if($kart[$y+1][$x+2] == "s")
				$kart[$y+1][$x+2] = "k";
			if($kart[$y+1][$x+3] == "s")
				$kart[$y+1][$x+3] = "k";
				
			if($kart[$y+2][$x-4] == "s")
				$kart[$y+2][$x-4] = "k";
			if($kart[$y+2][$x-3] == "s")
				$kart[$y+2][$x-3] = "k";
			if($kart[$y+2][$x-2] == "s")
				$kart[$y+2][$x-2] = "k";
			if($kart[$y+2][$x-1] == "s")
				$kart[$y+2][$x-1] = "k";
			if($kart[$y+2][$x-0] == "s")
				$kart[$y+2][$x-0] = "k";
			if($kart[$y+2][$x+1] == "s")
				$kart[$y+2][$x+1] = "k";
			if($kart[$y+2][$x+2] == "s")
				$kart[$y+2][$x+2] = "k";
			if($kart[$y+2][$x+3] == "s")
				$kart[$y+2][$x+3] = "k";
			if($kart[$y+2][$x+4] == "s")
				$kart[$y+2][$x+4] = "k";
				
			if($kart[$y+3][$x-4] == "s")
				$kart[$y+3][$x-4] = "k";
			if($kart[$y+3][$x-3] == "s")
				$kart[$y+3][$x-3] = "k";
			if($kart[$y+3][$x-2] == "s")
				$kart[$y+3][$x-2] = "k";
			if($kart[$y+3][$x-1] == "s")
				$kart[$y+3][$x-1] = "k";
			if($kart[$y+3][$x-0] == "s")
				$kart[$y+3][$x-0] = "k";
			if($kart[$y+3][$x+1] == "s")
				$kart[$y+3][$x+1] = "k";
			if($kart[$y+3][$x+2] == "s")
				$kart[$y+3][$x+2] = "k";
			if($kart[$y+3][$x+3] == "s")
				$kart[$y+3][$x+3] = "k";
			if($kart[$y+3][$x+4] == "s")
				$kart[$y+3][$x+4] = "k";
				
			if($kart[$y+4][$x-4] == "s")
				$kart[$y+4][$x-4] = "k";
			if($kart[$y+4][$x-3] == "s")
				$kart[$y+4][$x-3] = "k";
			if($kart[$y+4][$x-2] == "s")
				$kart[$y+4][$x-2] = "k";
			if($kart[$y+4][$x+2] == "s")
				$kart[$y+4][$x+2] = "k";
			if($kart[$y+4][$x+3] == "s")
				$kart[$y+4][$x+3] = "k";
			if($kart[$y+4][$x+4] == "s")
				$kart[$y+4][$x+4] = "k";
			
			
			
			
			
		}
	}
	
}

$skitt = 0;
foreach($kart as $y => $linje)
{
	foreach($linje as $x => $pixel)
	{
		if($pixel == "x")
			imagesetpixel($im, $x,$y, $bluecolor);
		if($pixel == "k")
			imagesetpixel($im, $x,$y, $greencolor);
		if($pixel == "s")
		{
			imagesetpixel($im, $x,$y, $redcolor);
			$skitt++;
		}
	}
	
}
header('Content-Type: image/png');
imagepng($im);


?>