<?php

 $emp = array(
 array("empid"=>1001,"empname"=>"xyz","job"=>"cleark","salary"=>12000),
 array("empid"=>1002,"empname"=>"klmn","job"=>"manager","salary"=>32000),
 array("empid"=>1003,"empname"=>"mno","job"=>"engineer","salary"=>42000),
 array("empid"=>1004,"empname"=>"pqrs","job"=>"programmer","salary"=>22000),

);

echo "Employee Records <hr>";
 foreach ($emp as $x) {
 	foreach ($x as $key=>$value) {
 		echo "$key is $value"." ";
 	}
 	echo "<hr>";
 }

?>