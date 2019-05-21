<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
    function showdata(a)
    {
      
   document.getElementById("res").innerHTML = a;
    }

	</script>
</head>
<body>

<input type="text" id="txtname" placeholder="enter name" onkeyup="showdata(this.value)"  />
<br>
<div id="res"></div>
</body>
</html>