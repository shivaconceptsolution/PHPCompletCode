<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Login here</h1>
<hr>
<form action="" method="post">
Enter emailid
<br>
<input type="text" name="txtemail" />
<br>
Enter password
<br>
<input type="password" name="txtpass" />
<br>
<input type="submit" name="btnlogin" value="Login" />
</form>
<br>
<a href="register.php">new use register here</a>
<br>
<?php
if(isset($_REQUEST['btnlogin']))
{
     session_start();
     $email = $_REQUEST['txtemail'];
     $pass = $_REQUEST['txtpass'];
    include('conn.php');
     $res = mysqli_query($conn,"select * from reg where email='$email' and password='$pass'");
     if(mysqli_num_rows($res)>0)
     {
          //=$email;
          $_SESSION['uid'] =$email;
          $_SESSION['abc']= "Welcome in SCS";
     	header('location:userdash.php');
     }
     else
     {
     	echo "invalid userid and password";
     }




}
?>
</body>
</html>