<?php 
$conn=mysqli_connect("localhost","root","","library");
$db=mysqli_select_db($conn,"library");
$query="INSERT INTO issued_book values('$_POST[rollno]','$_POST[title]','$_POST[issudate]','$_POST[renewdate]','$_POST[fine]')";
$query_run=mysqli_query($conn,$query);
 header('Location:book.php');
?>