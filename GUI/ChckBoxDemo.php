<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
<p>Enter name</p>
<p><input type="text" name="txtsname"  /></p>
<p>Select course</p>
<p><input type="checkbox" name="c[]" value="JAVA"  />JAVA</p>
<p><input type="checkbox" name="c[]" value=".NET"  />.NET</p>
<p><input type="checkbox" name="c[]" value="PHP"  />PHP</p>
<p><input type="submit" name="b1" value="Click" /></p>
</form>
<?php
if(isset($_REQUEST['b1']))
{

   $name = $_REQUEST['txtsname'];
   $course = $_REQUEST["c"];
   $s = "";
   for($i=0;$i<count($course);$i++)
   {
   	$s = $s.$course[$i]." ";
   }
   echo "name is $name and course is $s";

}




?>
</body>
</html>