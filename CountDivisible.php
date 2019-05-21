<?php
$c=0;
$str="";
for($i=10;$i<=100;$i++)
{
   if($i%3==0 && $i%5==0)
   {
   	$c++;
   	$str=$str.$i." ";
   }
}
echo "total divisible number from 3 and 5 is ",$c," number is ",$str;
?>