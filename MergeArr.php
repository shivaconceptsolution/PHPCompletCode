<?php
$a = array(2,3);
$b = array(5,6,7,8);
$c=array();
for($i=0;$i<count($a)+count($b);$i++)
{
  if($i<count($a))
  	$c[$i]=$a[$i];
  else
  	$c[$i]=$b[$i-count($a)];

}
//print_r($c);
echo "<br>Merged array is ","<br>";
for($i=0;$i<count($c);$i++)
{
	echo $c[$i],"<br>";
}

?>