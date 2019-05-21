<?php
$num=4;
if($num%2==0)
{
    for($i=1;$i<=10;$i++)
    {
    	echo $num*$i,"<br>";
    }
 }
else
{
	$fact=1;
	for($i=1;$i<=$num;$i++)
	{
       $fact = $fact*$i;

	} 
	echo "factorial is $fact";
}	






?>