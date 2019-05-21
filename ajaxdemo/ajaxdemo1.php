<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
    function showdata(a)
    {
     
    xmlhttp = new XMLHttpRequest();  
    xmlhttp.onreadystatechange=function()  //response state
    {
         if(xmlhttp.readyState==4 && xmlhttp.status==200)
         {
         	document.getElementById("res").innerHTML = xmlhttp.responseText;
         }

    } 

    xmlhttp.open("POST","ajaxdemo2.php?q="+a,true); //request state
    xmlhttp.send();
   
    }

	</script>
</head>
<body>

<input type="text" id="txtname" placeholder="enter name" onkeyup="showdata(this.value)"  />
<br>
<div id="res"></div>
</body>
</html>