<?php
$sal=11000;
for($empid=1001;$empid<=1020;$empid++)
{

   if($empid==1003 || $empid==1005 || $empid==1007)
   	continue;
   else if($sal>=20000 && $empid>1017)
   	break;
   else
   	echo "salary of $empid is $sal","<br>";


}






?>