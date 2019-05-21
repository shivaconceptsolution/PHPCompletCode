<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
    function showstate(a)
    {
    	

       xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange=function()
       {
          if(xmlhttp.readyState==4 && xmlhttp.status==200)
          {
           
     document.getElementById("state1").innerHTML = xmlhttp.responseText;

          }


       }

       xmlhttp.open("POST","state.php?q="+a,true);
       xmlhttp.send();


    }

    function showcity(a)
    {

      xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange=function()
       {
          if(xmlhttp.readyState==4 && xmlhttp.status==200)
          {
           
     document.getElementById("city1").innerHTML = xmlhttp.responseText;

          }


       }

       xmlhttp.open("POST","city.php?q="+a,true);
       xmlhttp.send();

    }

	</script>
</head>
<body>

<?php
$conn = mysqli_connect('localhost','root','','php9db');
?>
<select name="country" onchange="showstate(this.value)">	
<?php

$res = mysqli_query($conn,"select * from country");
while($x=mysqli_fetch_array($res))
{ ?>

<option value="<?php echo $x[0]; ?>"><?php echo $x[1]; ?></option>
<?php
}

?>
</select>
<br>
<br>
<div id="state1">
	
<select >
<option value="">Select State</option>
</select>

</div>
<br>
<br>
<div id="city1">
	<select >
<option value="">Select City</option>
</select>
</div>
</body>
</html>