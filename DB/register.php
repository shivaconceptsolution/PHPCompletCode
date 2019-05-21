<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="login.php"><h1>Already Register user login here</h1></a>
<hr>
<h1>Register here</h1>
<hr>
<form action="" method="post">
Enter emailid
<br>
<input type="text" name="txtemail" />
<br>
Enter password
<br>
<input type="text" name="txtpass" />
<br>
Enter mobileno
<br>
<input type="text" name="txtmobile" />
<br>
Enter address
<br>
<textarea name="txtaddress" rows="4" cols="20">
	
</textarea>
<br>
<input type="submit" name="btnsubmit" value="Register"/>


</form>

<?php

if(isset($_REQUEST['btnsubmit']))
{
   $email = $_REQUEST['txtemail'];
   $pass = $_REQUEST['txtpass'];
   $mobile = $_REQUEST['txtmobile'];
   $address = $_REQUEST['txtaddress'];
  include('conn.php');
   $res = mysqli_query($conn,"insert into reg(email,password,mobileno,address) values('$email','$pass','$mobile','$address')");
   if(mysqli_affected_rows($conn)>0)
   {
        echo "registration successfully";

   }



}
?>


</body>
</html>