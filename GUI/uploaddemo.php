<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="f" />
    <br>
    <br>
    <input type="submit" name="btnsubmit" value="Upload">

  </form>
  <?php
   if(isset($_REQUEST['btnsubmit']))
   {
      $name = $_FILES['f']['name'];
      $tmppath = $_FILES['f']['tmp_name'];
      $conn=mysqli_connect('localhost','root','','php9db');

      $res = move_uploaded_file($tmppath,"upload/".$name);
      if($res)
      {
      	$r = mysqli_query($conn,"insert into tbl_img(path) values('$name')");
      	if(mysqli_affected_rows($conn)>0)
      	{
      	echo "file uploaded successfully";
        }
      }	
      else
      	echo "problem in file uploading";

   }

 ?>
 <br>
<a href="vimg.php">View Images</a>
</body>
</html>