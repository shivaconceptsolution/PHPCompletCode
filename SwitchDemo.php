<?php

$op = '/';
$a=100;
$b=200;
switch($op)
{
    case '+':
    $c=$a+$b;
    echo $c;
    break;
    case '-':
    $c=$a-$b;
    echo $c;
    break;
    case '*':
    $c=$a*$b;
    echo $c;
    break;
    case '/':
    $c=$a/$b;
    echo $c;
    break;
    default:
    echo "assign only +,-,* and /";
    break;
}





?>