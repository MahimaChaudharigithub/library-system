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
<?php echo "<h3> ALL BOOKS CURRENTLY ISSUED  </h3>";
$db=mysqli_select_db($conn,"library");
  $sql = "select * from issued_book ";
   $res=mysqli_query($conn,$sql);
   
  echo "<table>";
  echo"<tr >";
  echo "<th>";echo "student roll";echo "</th>";
  echo"<th>";echo "title";echo"</th>";
 
  echo"<th>";echo "issudate";echo"</th>";
  echo"<th>";echo "renew date";echo "</th>";
  echo"<th>";echo "fine";echo"</th>";
  
  echo"</tr>";
  while($row=mysqli_fetch_assoc($res))
  {
  echo"<tr>";
  echo"<td>";echo $row['student_rollno'];echo "</td>";
  echo"<td>"; echo $row['title']; echo"</td>";
   
  
   echo"<td>"; echo $row['Isued_date']; echo"</td>"; 
   echo"<td>"; echo $row['Renew_date']; echo"</td>";
    echo"<td>"; echo $row['Fine']; echo"</td>";
	
	  echo "</tr>";
	  }
	  echo"</table>";
	  ?>
	  </body>
	  </html>