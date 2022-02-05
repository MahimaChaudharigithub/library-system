<?php
require_once('connect.php');
session_start();
if(isset($_SESSION['key'])==1){
header('Location:home.php');

}?>
 <?php 	
	
	
	
		//to prevent from mysqli injection
		$student_rollno = stripcslashes($_REQUEST['rollno']);
		$Student_password= stripcslashes($_REQUEST['pass']);
		$rollno = mysqli_real_escape_string($conn, $student_rollno);
		$password = mysqli_real_escape_string($conn, $Student_password);
	
		$sql = "select *from user where student_rollno = '$student_rollno' and Student_password = '$Student_password'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$count = mysqli_num_rows($result);
		
		if($count == 1){  $_SESSION['rollno'] = $student_rollno;

		header("Location: dashbord.php");
			echo "<h1><center> Login successful </center></h1>";
		}
		else{
			echo "<h1> Login failed. Invalid username or password.</h1>";
		}
 $conn->close();
 
  ?>	
