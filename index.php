<?php
$con = mysqli_connect("localhost","root","","Registration");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  if (isset($_POST['submit']))
  {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email  = $_POST['email'];
  $location = $_POST['location'];
  $number = $_POST['number'];
  
  if(empty($fname))
  {
	  $error = "first name is empty";
  }
   if(empty($lname))
  {
	  $errorl = " last name is empty";
  }
  if(empty($email))
  {
	  $error2 = "email is empty";
  }
  if(empty($location))
  {
	  $error3 = "location is empty";
  }
  if(empty($number))
  {
	  $error4 = "contact is empty";
  }
 
  else{
  $que = "INSERT INTO u_reg (u_fname,u_lname,u_email,u_loc,u_num) VALUES('$fname','$lname','$email','$location','$number')";
  
  if(mysqli_query($con,$que)){
	  echo "<center><b>Following data has been submited:</b></center>";
	  echo "<table align='center' border='4'><tr><td>
	  $fname</td><td>$lname</td><td>$email</td><td>$location</td><td>$number</td>
	  </tr></table>";
  }
  }
  }
?>

<html>
<head>

</head>
<body bgcolor="silver">

<form action="form.php" method="POST">
<table width="400px" border="3px;" align="center" style="margin-top:150px;">
<tr>
<th align="center" colspan="2" style="color:red;background-color:blue;">
Registraion form
</th>
<tr>
<td>First name</td>
<td>
<input type="text" name="fname" placeholder="Enter Your first name">
<b style="color:red;"><?php 
if(isset($error))
{
	echo $error;
}
?></b>
</td>
</tr>
<tr>
<td>Last name</td>
<td>
<input type="text" name="lname" placeholder="Enter Your last name">
<b style="color:red;"><?php 
if(isset($errorl))
{
	echo $errorl;
}
?></b>
</td>
</tr>
<tr>
<td>email</td>
<td>
<input type="text" name="email" placeholder="Enter Your email">
<b style="color:red;"><?php 
if(isset($error2))
{
	echo $error2;
}
?></b>
</td>
</tr>
<tr>
<td>Location</td>
<td>
<input type="text" name="location" placeholder="Enter Your Location">
<b style="color:red;"><?php 
if(isset($error3))
{
	echo $error3;
}
?></b>
</td>
</tr>
<tr>
<td>number</td>

<td>
<input type="text" name="number" placeholder="Enter Your number">
<b style="color:red;"><?php 
if(isset($error4))
{
	echo $error4;
}
?></b>
</td>
</tr>
<tr>
<td align="center" colspan="2"><input type="submit" name="submit" value="register"></td>
</tr>
</tr>
</table>
</form>
<h1 Align="center"> <a href = "view.php">VIEW Record<//a></h1>
</body>
</html>