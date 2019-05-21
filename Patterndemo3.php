<?php

for($i=1;$i<=5;$i++)
{
	$a=1;
    $b=0;
    for($j=1;$j<=6-$i;$j++)
    {
    	if($j%2!=0)
    	{
    		echo $a," ";
    		$a=0;
    	}
    	else
    	{
    		echo $b," ";
    		$b=1;
    	}
    }
    echo "<br>";

}





?>