<?php
$c = 0;
for($i = 1; $i <= 1000000; $i++)
{
	$sum = divSum($i);
	$diff = $sum - ($i*2);
	if($diff > 0)
	{
		if(sqrt($diff) == floor(sqrt($diff)))
		{
			echo $i . "\n";
			$c++;
		}
	}
}
echo "Fasit: ". $c . "\n";



function divSum($num) 
{ 
    // Final result of  
    // summation of divisors 
    $result = $num; 
  
    // find all divisors  
    // which divides 'num' 
    for ($i = 2; $i <= sqrt($num);  
                 $i++) 
    { 
        // if 'i' is divisor of 'num' 
        if ($num % $i == 0) 
        { 
            // if both divisors are  
            // same then add it only 
            // once else add both 
            if ($i == ($num / $i)) 
                $result += $i; 
            else
                $result += ($i + $num / $i); 
        } 
    } 
  
    // Add 1 to the result as 
    // 1 is also a divisor 
    return ($result + 1); 
} 


?>