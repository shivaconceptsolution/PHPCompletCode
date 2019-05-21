<?php

$x = array(array(2,3,5,7),array(4,5,8,9));
for($i=0;$i<count($x);$i++)
{
    for($j=0;$j<count($x[$i]);$j++)
    {
    	echo $x[$i][$j]," ";
    }
    echo "<br>";

}






?>