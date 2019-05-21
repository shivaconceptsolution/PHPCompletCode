<?php
$x = array(2,3,4,5,6,7,8,9,1);
$x1=array();
$x2=array();
for($i=0;$i<count($x);$i++)
{
      if($i<count($x)/2)
      	$x1[$i]=$x[$i];
      else
      	$x2[$i-(count($x)/2)]=$x[$i];
}

echo "First Array is ","<br>";
for($i=0;$i<count($x1);$i++)
{
	echo $x1[$i],"<br>";
}
echo "Second Array is ","<br>";
for($i=0;$i<count($x2);$i++)
{
	echo $x2[$i],"<br>";
}









?>