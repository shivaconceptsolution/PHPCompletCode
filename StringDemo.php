<?php

$str = "welcome";
$v=0;
$c=0;
for($i=0;$i<strlen($str);$i++)
{
   if($str[$i]=='a'||$str[$i]=='e'||$str[$i]=='i'||$str[$i]=='o'||$str[$i]=='u')
      {
         $v++;  
      }
      else
      {
        $c++;
      }
}

echo "Total vovel is $v";
echo " Total consonent is $c";




?>