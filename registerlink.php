<?php 
$conn=mysqli_connect("localhost","root","","library");
$db=mysqli_select_db($conn,"library");
$query="INSERT INTO user values('$_POST[rollno]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[pass]')";
$query_run=mysqli_query($conn,$query);
 header('Location:index.php');
?>
