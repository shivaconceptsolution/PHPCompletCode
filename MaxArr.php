<?php
$x = array(1,2,12,23,45,67,89,11,101,5);
$c1=0;
$c2=0;
for($i=0;$i<count($x);$i++)
{
    if($x[$i]>0 && $x[$i]<10)
    	$c1++;
    else if($x[$i]<100)
    	$c2++;
   

}
echo "Total one digit is $c1","<br>";
echo "Total two digit number is $c2","<br>";


?>