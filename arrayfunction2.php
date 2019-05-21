<?php

$key = array("rno","name","branch","fees");

$value = array(1001,"xyz","CS",60000);

$arr = array_combine($key, $value);
print_r($arr);

$x = array(12,23,34,45,56,67,78,89);
echo "<br>";
$arr1 = array_splice($x,3); //it will display all elements after index
print_r($x);
echo "<br>";
print_r($arr1);
echo "<br>";
$x1 = array(12,23,34,45,56,67,78,89);
$arr2 = array_slice($x1, 3);
echo "<br>";
print_r($x1);
echo "<br>";
print_r($arr2);
echo "<br>";
$x2 = array_chunk($x1,4);
print_r($x2);
if(in_array(56,$x1))
{

	echo "found";
}
else
{
	echo "not found";
}

$arr3=array();

if(is_array($arr3))
{
    echo "array type variable";
}
else
{
   echo "normal variable";
}










?>