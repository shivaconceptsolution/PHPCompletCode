<?php
session_start();
//session_start();
//echo session_id();
if(!isset($_SESSION['uid']))
{
	header('location:login.php');
}


?>

<a href="logout.php">logout</a>
<?php

echo $_SESSION['abc'];
echo $abc;
$uid= $_SESSION['uid'];
include('conn.php');
$res = mysqli_query($conn,"select * from reg where email='$uid'");
$x = mysqli_fetch_array($res);

?>
<table>
<tr><th>Emailid</th><td><?php echo $x[0]; ?></td></tr>
<tr><th>Password</th><td><?php echo $x[1]; ?></td></tr>
<tr><th>Mobileno</th><td><?php echo $x[2]; ?></td></tr>
<tr><th>Address</th><td><?php echo $x[3]; ?></td></tr>


</table>
