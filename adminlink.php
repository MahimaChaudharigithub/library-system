<?php
require_once('connect.php');
session_start();
if(isset($_SESSION['key'])==1){
header('Location:home.php');

}?>
 <?php 	
	
	
	
		//to prevent from mysqli injection
		$Id = stripcslashes($_REQUEST['id']);
		$password= stripcslashes($_REQUEST['pass']);
		$Id = mysqli_real_escape_string($conn, $Id);
		$Password = mysqli_real_escape_string($conn, $password);
	
		$sql = "select *from adminlogin where Id = '$Id' and Password = '$password'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$count = mysqli_num_rows($result);
		
		if($count == 1){  $_SESSION['Id'] = $Id;

		header("Location: admindashbord.php");
			echo "<h1><center> Login successful </center></h1>";
		}
		else{
			echo "<h1> Login failed. Invalid username or password.</h1>";
		}
 $conn->close();
 
  ?>	