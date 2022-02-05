<?php
	session_start();
	function get_user_issue_book_count(){
		$conn = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($conn,"library");
		$user_issue_book_count = 0;
		$query = "select (*)  from issubook where student_rollno = $_SESSION[rollno]";
		$query_run = mysqli_query($conn,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$user_issue_book_count = $row['user_issue_book_count'];
	}
	return($user_issue_book_count);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
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
				<a class="navbar-brand" href="index.php">Library Management System(LMS)</a>
			</div>
			<!--<font style="color: white"><span><strong>Welcome: <?php// echo $Student_firstname;?></strong></span></font>-->
			<!--<font style="color: white"><span><strong>Rollno <?php //echo $student_rollno;?></strong></span></font>-->
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="viewprofile.php">View Profile</a>
						
						<a class="dropdown-item" href="change_password.php">Change Password</a>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
			</ul>
		</div>
	</nav><br>
	<span><marquee>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
	<div class="row">
		<div class="col-md-3">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Issued Books:</div>
				<div class="card-body">
					<a href="issubook.php" class="btn btn-danger" target="_blank">View Issued Books</a>
				</div>
			</div>
		</div>
		<div class="row">
		<div class="col-md-3">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Total Books:</div>
				<div class="card-body">
					<a href="book.php" class="btn btn-danger" target="_blank">View Books</a>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
		<div class="col-md-3"></div>
		<div class="col-md-3"></div>
	</div>
</body>
</html>