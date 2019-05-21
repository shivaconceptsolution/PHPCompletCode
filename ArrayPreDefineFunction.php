<?php
$x = array(12,23,34,45,67,11);
echo max($x),"<br>";
echo min($x)."<br>";
echo array_sum($x)."<br>";
echo count($x)."<br>";

$y=array_reverse($x);
print_r($y);  #represent complete structure
echo "<br>";
//sort($x);
rsort($x);
print_r($x);
echo "<br>";
$a= array(1,2,3,2,5,6);
$b=array(4,5,6,6,7,1);
$c=array_merge($a,$b); //union all
print_r($c);
echo "<br>";
$rec = array_unique(array_merge($a,$b));//union
print_r($rec);

echo "<br>";
$rec1 = array_intersect($a,$b);  //intersection
print_r($rec1);
echo "<br>";
$rec2 = array_diff($a,$b);  //minus
print_r($rec2);












?>