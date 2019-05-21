<?php
$str = "madam";
$str1="";
for($i=strlen($str)-1;$i>=0;$i--)
{
   $str1 = $str1.$str[$i];
}
if($str==$str1)
	echo "pallindrom";
else
	echo "not pallindrom";
?>