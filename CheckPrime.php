<?php
$num=4;
$i=1;
$c=0;
while($i<=$num)
{
  if($num%$i==0)
  	$c++;
   $i++;
}

if($c==2)
	echo "prime";
else
	echo "not prime";


?>