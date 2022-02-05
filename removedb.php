<?php 
require_once('connect.php');
$_SESSION['var']=0;
$ISBN="";
if($_SERVER['REQUEST_METHOD']=="POST")
{$ISBN=$_POST["ISBN"];
$query="DELETE FROM book  WHERE ISBN='$ISBN'";
$query_run=mysqli_query($conn,$query);
 header('Location:book.php');
}
?>