<?php

require_once('connect.php');
session_start();
if(isset($_SESSION['key'])==1){


}?>
<html>
<head>
<style>
table{
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
td, th {
  border: 1px solid #ddd;
  padding: 8px;
}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}</style>
<title>
books
</title>

</head>
<body>
<div class="main-content-inner">
<div class ="row">
<div class="col-12">
<?php echo "<h3> ALL users </h3>";
$db=mysqli_select_db($conn,"library");
  $sql = "select * from user ";
   $res=mysqli_query($conn,$sql);
   
  echo "<table>";
  echo"<tr >";
  echo "<th>";echo "student roll";echo "</th>";
  echo"<th>";echo "first name";echo"</th>";
 
  echo"<th>";echo "lastname";echo"</th>";
  echo"<th>";echo "email";echo "</th>";
  echo"<th>";echo "password";echo"</th>";
  
  echo"</tr>";
  while($row=mysqli_fetch_assoc($res))
  {
  echo"<tr>";
  echo"<td>";echo $row['student_rollno'];echo "</td>";
  echo"<td>"; echo $row['Student_firstname']; echo"</td>";
   
  
   echo"<td>"; echo $row['Student_lastname']; echo"</td>"; 
   echo"<td>"; echo $row['email']; echo"</td>";
    echo"<td>"; echo $row['Student_password']; echo"</td>";
	
	  echo "</tr>";
	  }
	  echo"</table>";
	  ?>
	  </body>
	  </html>