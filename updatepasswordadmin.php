<?php
	session_start();
	include("connect.php");
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"library");
	$password = "";
	$query = "select * from admin where firstname = '$_POST[first]'";
	$query_run = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$password = $row['password'];
	}
	if($password == $_POST['pass']){
		$query = "update admin set password = '$_POST[newpassword]' where firstname = '$_POST[firstname]'";
		$query_run = mysqli_query($connection,$query);
	}
	?>
<script type="text/javascript">
	alert("Updated successfully...");
	window.location.href = "admindashbord.php";
</script>