<?php

$conn=mysqli_connect('localhost','root','','php9db');
$res = mysqli_query($conn,"select * from tbl_img");
while($x = mysqli_fetch_array($res))
{ ?>

<img src="upload/<?php echo $x['path'];  ?>" width="200" height="200" /> 

<?php
}
?>