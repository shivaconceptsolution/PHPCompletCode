<?php
$x = array(1,2,3);
$y = array(34,54,56);
$z = array(2,3);
$k = array(5,6,8,9,11);
$arr = array();

for($i=0;$i<count($x)+count($y)+count($z)+count($k);$i++)
{
  if($i<count($x))  //0,1,2
    $arr[$i]=$x[$i];
  else if($i<count($x)+count($y)) //3,4,5
    $arr[$i]= $y[$i-count($x)] ;
  else if($i<count($x)+count($y)+count($z))
    $arr[$i] = $z[$i-(count($x)+count($y))] ; 
  else
    $arr[$i]= $k[$i-(count($x)+count($y)+count($z))] ;//6,7
 
}
echo "merge array is <br>";
for($i=0;$i<count($arr);$i++)
{
	echo $arr[$i],"<br>";
}








?>