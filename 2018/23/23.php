<?php

$string = file_get_contents('./input-fnr.txt', true);
$lines = explode("\n", $string);
$c = 0;
foreach($lines as $line)
{
	$str = str_split($line);
	
	$dag = $str[0] . $str[1];
	$mnd = $str[2] . $str[3];
	$aar = $str[4] . $str[5];
	$indnr = $str[6] . $str[7] . $str[8];
	$knr = $str[9] . $str[10];
	
	if($aar >= 0)
	{
		$aar += 2000;
	}
	else
	{
		$aar = $aar += 1900;
	}
	
	echo $str[3];
	if($str[3] == "8" && checkdate($mnd, $dag, $aar))
	{
		echo "check\n";
		$result = checknr($line);
		if($result[1] == 0 && $result[0] == 1)
		{
			$c++;
		}
	}
	//die;
	
}

echo "fasit: " . $c . "\n";


function checknr($numb)
{
	$error_1 = 0;
	if(!empty($numb)){
		//fjerner alt som ikke er tall
		$numb = preg_replace('/[^0-9]/', '', $numb);
			//kontrollsjekk k1
			$k1 = (3*$numb[0] + 7*$numb[1] + 6*$numb[2] + 1*$numb[3] + 8*$numb[4] + 9*$numb[5] + 4*$numb[6] + 5*$numb[7] + 2*$numb[8]) % 11;			
				if($k1 == "0"){
					$k1 = 0; 
				}else{ 
					$k1 = 11-$k1;
				}
			//kontrollsjekk k2
			$k2 = (5*$numb[0] + 4*$numb[1] + 3*$numb[2] + 2*$numb[3] + 7*$numb[4] + 6*$numb[5] + 5*$numb[6] + 4*$numb[7] + 3*$numb[8] + 2*$k1) % 11;
				if($k2 == "0"){
					$k2 = 0;
				}else{
						$k2 = 11-$k2;
				}
			//er det nå bare tall ?  og er 11 siffer
				if((preg_match('#[^0-9]#', $numb)) || (strlen($numb) != 11) || (($k1 != $numb[9]) || ($k2 != $numb[10]))){
					$reg_error[] = 1;
					$error_1 = 1;
				}
					//mann / kvinne
			$gender = "2"; //mann
			if(($numb[8] % 2) == 0){
					$gender = "1";
			}
				//Er dette et D-nummer
			if($numb[0] > 3){
				$numb1 = $numb[0] - 4;
			}else{
				$numb1 = $numb[0];
			}
				//Er dette et H-nummer
			if($numb[2] > 1){
				$numb3 = $numb[2] - 4;
			}else{
				$numb3 = $numb[2];
			}
			//skifter bare navn
			$Personnummer = $numb;
			
	//dersom feltet er tomt
	}else{
			$reg_error[] = 11;
			$error_1 = 1;
	}
	return array($gender, $error_1);
}

?>