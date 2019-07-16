<?php
$con = mysqli_connect("localhost","root","","Registration");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $edit_record = $_GET['edit'];
  
  $query = "select * from u_reg where u_id='$edit_record'";
  
  $run = mysqli_query($con,$query);
  while($row = mysqli_fetch_array($run))
  {
	  $edit_id = $row['u_id'];
	  $fname = $row[1];
	  $lname = $row[2];
	  $email = $row[3];
	  $location = $row[4];
	  $number = $row[5];
	  
  }
  ?>


<html>
<head>

</head>
<body bgcolor="silver">

<form action="edit.php?edit_form=<?php echo
$edit_id;?>" method="POST">
<table width="400px" border="3px;" align="center" style="margin-top:150px;">
<tr>
<th align="center" colspan="2" style="color:red;background-color:blue;">
Updating  form
</th>
<tr>
<td>First name</td>
<td>
<input type="text" name="fname1" value='<?php echo $fname; ?>' placeholder="Enter Your first name" >

</td>
</tr>
<tr>
<td>Last name</td>
<td>
<input type="text" name="lname1" value='<?php echo $lname; ?>' placeholder="Enter Your last name">

</td>
</tr>
<tr>
<td>email</td>
<td>
<input type="text" name="email1" value='<?php echo $email; ?>' placeholder="Enter Your email">

</td>
</tr>
<tr>
<td>Location</td>
<td>
<input type="text" name="location1" value='<?php echo $location; ?>' placeholder="Enter Your Location">

</td>
</tr>
<tr>
<td>number</td>

<td>
<input type="text" name="number1" value='<?php echo $number; ?>' placeholder="Enter Your number">

</td>
</tr>
<tr>
<td align="center" colspan="2"><input type="submit" name="update" value="update"></td>
</tr>
</tr>
</table>
</form>
</body>
</html>

<?php
if (isset($_POST['update'])){
	$edit_record1 = $_GET['edit_form'];
	$fname1 = $_POST['fname1'];
	$lname1 = $_POST['lname1'];
	$email1 = $_POST['email1'];
	$location1 = $_POST['location1'];
	$number1 = $_POST['number1'];
	
	$query1 = "update u_reg set u_fname='$fname1',u_lname='$lname1',u_email='$email1',u_loc='$location1',u_num='$number1' where u_id=
	'$edit_record1'";
	
	if (mysqli_query($con,$query1)){
		
	  echo "<script>window.open('view.php?updated=Record has been updated successfully!','_self')</script>";
		
	}
	
}
?>