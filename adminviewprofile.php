<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"library");
	$fname = "";
	$lname = "";
	$email = "";
	
	$query = "select * from admin where Id='$_SESSION[Id]'";
	$query_run = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$fname = $row['firstname'];
		$lname = $row['lastname'];
		$email = $row['email'];
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		#side_bar{
  			background-color: whitesmoke;
  			padding: 50px;
  			width: 300px;
  			height: 450px;
  		}
  	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="dashboard.php">Library Management System(LMS)</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="adminviewprofile.php">View Profile</a>
					
						<a class="dropdown-item" href="change_passwordadmin.php">Change Password</a>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
			</ul>
		</div>
	</nav><br>
	<span><marquee>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form>
				<div class="form-group">
					<label>FirstName:</label>
					<input type="text" class="form-control" value="<?php echo $fname;?>" disabled>
				</div>
				<div class="form-group">
					<label>Lastname:</label>
					<input type="text" class="form-control" value="<?php echo $lname;?>" disabled>
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input type="text" class="form-control" value="<?php echo $email;?>" disabled>
				</div>
				
				
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>