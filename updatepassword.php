<?php
	session_start();
	include("connect.php");
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"library");
	$password = "";
	$query = "select * from user where Student_firstname = '$_POST[firstname]'";
	$query_run = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$password = $row['Student_password'];
	}
	if($password == $_POST['pass']){
		$query = "update user set Student_password = '$_POST[newpassword]' where Student_firstname = '$_POST[firstname]'";
		$query_run = mysqli_query($connection,$query);
	}
	?>
<script type="text/javascript">
	alert("Updated successfully...");
	window.location.href = "dashbord.php";
</script>