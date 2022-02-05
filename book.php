<?php

include"connect.php";

?>
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
 <h2>List of book</h2>
 <?php
  $db=mysqli_select_db($conn,"library");
  $sql = "select * from book ";
   $res=mysqli_query($conn,$sql);
   
  echo "<table class='book' >";
  echo"<tr >";
  echo"<th>";echo "Id";echo"</th>";
  echo"<th>";echo "Book-title";echo"</th>";
  echo"<th>";echo "language";echo"</th>";
  echo"<th>";echo "Authors";echo "</th>";
  echo"<th>";echo "Mrp";echo"</th>";
  echo"<th>";echo "date";echo"</th>";
  echo"<th>";echo "quenty";echo"</th>";
  echo"</tr>";
  while($row=mysqli_fetch_assoc($res))
  {
  echo"<tr>";
   echo"<td>"; echo $row['ISBN']; echo"</td>";
   echo"<td>"; echo $row['Title']; echo"</td>";
   echo"<td>"; echo $row['Language']; echo"</td>"; 
   echo"<td>"; echo $row['Publisher']; echo"</td>";
    echo"<td>"; echo $row['MRP']; echo"</td>";
	 echo"<td>"; echo $row['PUB_Date']; echo"</td>";
	  echo"<td>"; echo $row['Quantity']; echo"</td>";
	  echo "</tr>";
	  }
	  echo"</table>";
	  ?>
	  </body>
	  </html>