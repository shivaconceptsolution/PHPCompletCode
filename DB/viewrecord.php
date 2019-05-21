<h1>View Students Record</h1>
<hr>
<table border="1" cellspacing="0" cellspacing="0" width="600">
<tr><th>Rno</th><th>Sname</th><th>Branch</th><th>Fees</th></tr>

<?php

 include('conn.php');
 $res = mysqli_query($conn,"select * from student");
 while($x = mysqli_fetch_array($res))
 { ?>
  <tr><td><?php echo $x[0] ?> </td><td><?php echo $x[1] ?></td><td><?php echo $x[2] ?></td><td><?php echo $x[3] ?></td>

  <td><a href="editrecord.php?q=<?php echo $x[0] ?>" >Edit</a></td><td><a href="deleterecord.php?q=<?php echo $x[0] ?>" >Delete</a></td>
  </tr> 

 <?php
}

?>
</table>