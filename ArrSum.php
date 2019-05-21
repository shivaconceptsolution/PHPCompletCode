<?php
$x = array(12,23,34,45,67,78,11);
$sum=0;
for($i=0;$i<count($x);$i++)
{
    $sum =$sum+$x[$i];
}
echo "sum of array elements is ".$sum;
?>