<?php

$sid = $_REQUEST['q'];
$conn = mysqli_connect('localhost','root','','php9db');
?>

<select name="state" onchange="showcity(this.value)">
<?php
$res = mysqli_query($conn,"select * from state where countryid=$sid");
while($x = mysqli_fetch_array($res))
{ ?>
<option value="<?php echo $x[0]; ?>"><?php echo $x[1]; ?></option>

<?php
}
?>
</select>