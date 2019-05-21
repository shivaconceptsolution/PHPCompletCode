<?php
$a=10000;
$b=200;
$c=30;
$d=4000;
if($a>$b && $a>$c && $a>$d)
echo "$a is greatest";
else if($b>$c && $b>$d)
echo "$b is greatest";
else if($c>$d)
echo "$c is greatest";  
else
echo "$d is greatest";


?>