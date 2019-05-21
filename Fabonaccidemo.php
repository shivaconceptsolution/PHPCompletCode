<?php
$a=-1;
$b=1;
for($i=1;$i<=10;$i++)
{
	$count=0;
	$c=$a+$b;
	for($j=1;$j<=$c;$j++)
	{
		if($c%$j==0)
			$count++;
	}
   if($count==2)
	echo $c."<br>";
	$a=$b;
	$b=$c;
}





?>