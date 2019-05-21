<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
<p>Enter first number</p>
<p><input type="text" name="txtnum1" /></p>
<p>Enter second number</p>
<p><input type="text" name="txtnum2" /></p>
<p><input type="submit" name="btnsubmit" value="SWAP"> </p>
</form>
<?php
if(isset($_REQUEST['btnsubmit'])) //when we click button then code will execute
{
  $num1 = $_REQUEST['txtnum1'];
  $num2 = $_REQUEST['txtnum2'];
  echo "Before swapping value is $num1 and $num2 <br>";
  $num3=$num1;
  $num1=$num2;
  $num2=$num3;
  echo "After swapping value is $num1 and $num2 <br>";
 }
?>

</body>
</html>