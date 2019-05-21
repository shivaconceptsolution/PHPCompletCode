<?php
$conn = mysqli_connect('localhost','root','','php9db');
$sname= $_REQUEST['q']."%";
if(!empty($sname))
{
$res = mysqli_query($conn,"select * from student where sname like '$sname'");
while($x=mysqli_fetch_array($res))
{
	echo $x[0],' ',$x[1],' ',$x[2],' ',$x[3],"<hr>";
}
}

?>