<?php
$x = array(array(2,3),array(4,5));
$y = array(array(1,2),array(1,4));
$z = array(array(),array());
for($i=0;$i<count($x);$i++)
{
   for($j=0;$j<count($x[$i]);$j++)
   {
     $z[$i][$j] = $x[$i][$j]+$y[$i][$j];
     echo $z[$i][$j]," ";
   }
   echo "<br>";
   

}

?>