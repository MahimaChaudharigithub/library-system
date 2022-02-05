<?php 
$conn=mysqli_connect("localhost","root","","library");
$db=mysqli_select_db($conn,"library");
$query="INSERT INTO book values('$_POST[ISBN]','$_POST[title]','$_POST[language]','$_POST[Authors]','$_POST[Mrp]','$_POST[date]','$_POST[quenty]')";
$query_run=mysqli_query($conn,$query);
 header('Location:book.php');
?>