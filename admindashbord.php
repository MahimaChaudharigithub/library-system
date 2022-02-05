<?php
	require('connect.php');
	session_start();
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

<?php
	
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"library");
	$fname = "";
	$lname = "";
	$email = "";
	$query = "SELECT * from admin ";
	$query_run = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$Id = $row['id'];
		
		$firstname = $row['firstname'];
	    $lastname = $row['lastname'];
	}
?>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Library Management System(LMS)</a>
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
	</nav>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
	<div class="container-fluid">
		<ul class="nav navbar-nav navbar-center">
			<li class="nav-item">
				<a href="admindashboard.php" class="nav-link">Dashboard</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Book</a>
				<div class="dropdown-menu">
					<a href="addbook.php" class="dropdown-item">Add New Book</a>
					<a href="deletebook.php" class="dropdown-item">Manage Books</a>
					<a href="issubookinsert.php" class="dropdown-item">issubookadd</a>
				</div>
			</li>
			<li class="nav-item">
				<a href="issubook.php" class="nav-link">Issue Book</a>
			</li>
		</ul>
	</div>
</nav>

	<span><marquee>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
	<div class="row">
		<div class="col-md-3">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Registered Users:</div>
				<div class="card-body">
					
					<a href="userdetails.php" class="btn btn-danger" target="_blank">View Registered Users</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Registered Books:</div>
				<div class="card-body">
					
					<a href="book.php" class="btn btn-primary" target="_blank">View Registered Books</a>
				</div>
			</div>
		</div>
		
		
		<div class="col-md-3">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Issued Books:</div>
				<div class="card-body">
					
					<a href="issubook.php" class="btn btn-success" target="_blank">View Issued books</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>