<?php
$str = "Hello World";
echo strlen($str),"<br>";
echo strrev($str),"<br>";
echo strtoupper($str),"<br>";
echo strtolower($str),"<br>";
echo substr($str, 2),"<br>";
echo substr($str, 2,5),"<br>";
echo strpos($str,'o');

$a = "zbc";
$b = "zbc";
if(strcmp($a,$b)==0)
{
	echo "String is equall";
}
else if(strcmp($a,$b)>0)
{
	echo "First is greater then second";
}
else
{
	echo "second is greater then first";
}

?>