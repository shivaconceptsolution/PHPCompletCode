<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form name="frminsert" action="">

      Enter rno
      <br>
      <input type="text" name="txtrno" />
      <br>
      Enter name
      <br>
      <input type="text" name="txtsname"/>
      <br>
      Enter branch
      <br>
      <input type="text" name="txtbranch" />
      <br>
      Enter fees
      <br>
      <input type="text" name="txtfees" />
      <br>
      <input type="submit" name="btnsubmit" value="Insert" />


	</form>
	<a href="viewrecord.php">View Student Record</a>
  <?php
   if(isset($_REQUEST['btnsubmit']))
   {
      $rno = $_REQUEST['txtrno'];
      $sname = $_REQUEST['txtsname'];
      $branch = $_REQUEST['txtbranch'];
      $fees = $_REQUEST['txtfees'];
     include('conn.php');
      $res = mysqli_query($conn,"insert into student(rno,sname,branch,fees) values($rno,'$sname','$branch',$fees)");
      if(mysqli_affected_rows($conn)>0)
      {
         echo "data inserted successfully";

      }
      else
      {
      	echo "problem  in data insertion";
      }



   }



  ?>

</body>
</html>