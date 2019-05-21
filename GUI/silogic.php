<?php
$p = $_REQUEST['txtp']; //to fetch data of textfiled and store into variable
$r = $_REQUEST['txtr'];

$t = $_REQUEST['txtt'];

$si = ($p*$r*$t)/100;

echo "result is $si";




?>