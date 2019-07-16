<html>
<head></head>
<body bgcolor="silver">
<font color='red' size='4' align="center"><?php echo @$_GET['deleted'];?><?php echo @$_GET['updated'];?></font>
<table width="100%" align="center" border="4px">
<tr>
<td bgcolor="blue" align="center" colspan="20"><h1>View All Records</h1></td>
</tr>
<tr>
<td align="center"><b>Serial no</b></td>
<td align="center"><b>First name</b></td>
<td align="center"><b>Last name</b></td>
<td align="center"><b>Email</b></td>
<td align="center"><b>Location</b></td>
<td align="center"><b>Number</b></td>
<td align="center"><b>Edit</b></td>
<td align="center"><b>Delete</b></td>
</tr>
<?php
$con = mysqli_connect("localhost","root","","Registration");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  $que = "select * from u_reg order by 1 DESC";
  $run = mysqli_query($con,$que);
   while ($row=mysqli_fetch_array($run))
   {
	   $u_id =$row['u_id'];
	   $u_fname= $row['u_fname'];
	   $u_lname =$row['u_lname'];
	   $u_email= $row['u_email'];
	   $u_loc =$row['u_loc'];
	   $u_num =$row['u_num'];
?>




<tr align="center">
<td><?php echo $u_id;?></td>
<td><?php echo $u_fname;?></td>
<td><?php echo $u_lname;?></td>
<td><?php echo $u_email;?></td>
<td><?php echo $u_loc;?></td>
<td><?php echo $u_num;?></td>
<td align="center"><a href ='edit.php?edit=<?php echo $u_id; ?>'>Edit</a></td>
<td align="center"><a href ='delete.php?del=<?php echo $u_id;?>'>Delete</td>

</tr>
   <?php } ?>
</table>
<h1 Align="center"> <a href = "index.php">BACK TO HOME<//a></h1>
</body>
</htm>