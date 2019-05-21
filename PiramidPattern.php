<?php
$row=5;
echo "<pre>";
for($i=1;$i<=5;$i++)
{

	for($j=1;$j<$row;$j++)
		echo "&nbsp;";
	
	for($k=1;$k<=2*$i-1;$k++)
		echo "*";
	 $row--;
	echo "<br>";
}
echo "</pre>";







?>