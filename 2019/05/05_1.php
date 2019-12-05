<?php

$string = str_split('tMlsioaplnKlflgiruKanliaebeLlkslikkpnerikTasatamkDpsdakeraBeIdaegptnuaKtmteorpuTaTtbtsesOHXxonibmksekaaoaKtrssegnveinRedlkkkroeekVtkekymmlooLnanoKtlstoepHrpeutdynfSneloietbol');

//Step 3
foreach($string as $no => $char){
	$stepA[count($string)+$no%3*2-3-$no] = $char;}
//Step 2
for($i=0;$i < count($stepA); $i = $i+2){
	$stepB[$i] = $stepA[$i+1];
	$stepB[$i+1] = $stepA[$i];}
//Step 1
for($i = 0; $i < count($stepB);$i++){
	$stepC[$i] = $stepB[((count($stepB)/2)+$i)%count($stepB)];}

echo implode($stepC) . "\n";


?>