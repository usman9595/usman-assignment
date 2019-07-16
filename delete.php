<?php 

$con = mysqli_connect("localhost","root","","Registration");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  $delete_record =$_GET['del'];
  
  $query = "delete from u_reg where u_id='$delete_record'";
  
  if (mysqli_query($con,$query))
  {
	 echo "<script>window.open('view.php?deleted=Record has been deleted successfully!','_self')</script>";
  }
?>