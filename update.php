<?php

	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"library");
	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$query="UPDATE  user SET Student_firstname='$fname',Student_lastname='$lname,email='$email'";
	
	$result = mysqli_query($connection,$query);
	
?>
<script type="text/javascript">
	alert("Updated successfully...");
	window.location.href = "dashboard.php";
</script>