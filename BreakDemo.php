<?php

for($i=1;$i<=10;$i++)
{

     if($i==3 || $i==5 || $i==7)
     	continue;
     if($i==7)
        break;

    
     
     echo $i,"<br>";
}
echo "welcome";
?>