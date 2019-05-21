<?php

$ch = '@';
$asc = ord($ch);
$s = ($asc>=48 && $asc<=57)?"numeric char":(
(($asc>=65 && $asc<=91) || ($asc>=97 && $asc<=123))?"alpha":"other");
echo $s;



?>