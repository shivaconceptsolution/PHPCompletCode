<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
<input type="text" name="txtname" placeholder="Enter name" />
<br>
<br>	
<select name="course">
<option value="C">C</option>
<option value="CPP">CPP</option>
<option value="JAVA">JAVA</option>
<option value=".NET">.NET</option>
</select>
<br>
<br>
<input type="submit" name="btn" value="Click" />
</form>
<?php
if(isset($_REQUEST['btn']))
{
    $name = $_REQUEST['txtname'];
    $course = $_REQUEST['course'];
    echo "name is $name and course is $course";

}
?>
</body>
</html>