<?php


$input = explode("\n", utf8_decode(file_get_contents("rap_battle.txt")));
//$input = array('Lil Niz X: nisse pepperkake hygge','Nizzy G: grøt pepperkake grøt grøt','Lil Niz X: nisse julenisse nisse pepperkake','Nizzy G: julegrøt snø');


$grunnordinn = explode("\n", utf8_decode(file_get_contents("basewords.txt")));

foreach($grunnordinn as $ord)
{
	preg_match('/(.*) (\d*)/', $ord, $matches);
	$grunnord[] = $matches[1];
	$grunnordpoeng[$matches[1]] = $matches[2];
}



$totalsum = array('Lil Niz X' => 0, 'Nizzy G' => 0);

foreach($input as $linje)
{
	preg_match('/(.*): (.*)/', $linje, $matches);
	
	$rapord = explode(' ', $matches[2]);
	$sanger = $matches[1];
	
	$forrigegord = "";
	$forrigevokaler = -1;
	$repetisjonsdivisor = 1;
	$linjeverdi = 0;
	foreach($rapord as $ord)
	{
		foreach($grunnordpoeng as $gord => $poeng)
		{
			$pos = strpos($ord, $gord);
			if($pos !== false)
			{
				if(strpos($ord, 'jule') !== false)
					$julebonus = 2;
				else
					$julebonus = 1;
				
				
				$vokaler = tellvokaler($ord);
				
				if($forrigevokaler != -1 && $vokaler > $forrigevokaler)
					$vokalbonus = abs($vokaler - $forrigevokaler) * $julebonus;
				else
					$vokalbonus = 0;
				
				if($forrigegord == $gord)
					$repetisjonsdivisor++;
				else
					$repetisjonsdivisor = 1;
				
				$ordverdi = floor(($poeng+$vokalbonus)/$repetisjonsdivisor);
				echo $ord . " = (" . $poeng . " + " . $vokalbonus . ") / " . $repetisjonsdivisor . " =  " . $ordverdi . "\n";
				$forrigevokaler = $vokaler;
				$forrigegord = $gord;
				break;
			}
		}
		
		$linjeverdi += $ordverdi;
		
	}
	echo "Total for linje: " . $linjeverdi . "\n";
	$totalsum[$sanger] += $linjeverdi;
}

print_r($totalsum);

function tellvokaler($ord)
{
	$vokaler = array('a','e','i','o','u','y','æ','ø','å');
	$c = 0;
	foreach($vokaler as $vokal)
	{
		$c += substr_count($ord, $vokal);
	}
	return $c;
}