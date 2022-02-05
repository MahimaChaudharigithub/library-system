<?php 
$conn=mysqli_connect("localhost","root","","library");
$db=mysqli_select_db($conn,"library");
$query="INSERT INTO admin values('$_POST[id]','$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[password]')";
$query_run=mysqli_query($conn,$query);
 header('Location:adminlogin.php');
?>
