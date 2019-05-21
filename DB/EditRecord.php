<?php
$rid= $_REQUEST['q'];
include('conn.php');
$res = mysqli_query($conn,"select * from student where rno=$rid");
$arr = mysqli_fetch_array($res);
?>
<form action=""  method="post">
Enter rno
<br>
<input type="text" name="txtrno" value="<?php echo $arr[0]; ?>" readonly="true" />
<br>
Enter name
<br>
<input type="text" name="txtname" value="<?php echo $arr[1]; ?>" />
<br>
Enter branch
<br>
<input type="text" name="txtbranch" value="<?php echo $arr[2]; ?>" />
<br>
Enter fees
<br>
<input type="text" name="txtfees" value="<?php echo $arr[3]; ?>" />
<br>
<input type="submit" name="btnsubmit" value="Update" />


</form>

<?php

if(isset($_REQUEST['btnsubmit']))
{
   $rno =    $_REQUEST['txtrno'];
   $sname =  $_REQUEST['txtname'];
   $branch = $_REQUEST['txtbranch'];
   $fees =   $_REQUEST['txtfees'];
   $res1 = mysqli_query($conn,"update student set sname='$sname',branch='$branch',fees=$fees where rno=$rno");
   if(mysqli_affected_rows($conn)>0)
   {
   	header('location:viewrecord.php');
   }
   else
   {
   	echo "problem in data updation";
   }

}


?>