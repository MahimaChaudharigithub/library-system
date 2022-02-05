<?php
require_once('connect.php');
session_start();
include'header.php';
?>
<html>
<head>
<link rel="stylesheet"  href="style1.css">
</head>

<body>
<form name="issubookinsert" method="post" action="removedb.php">
<div class="form-group col-md-12">
<center><h2 style="color:blue">Remove book</h2></center>
</div>
<div class="form-group col-md-12">
<input type="text" class="form-control" name="ISBN"  placeholder="ISBN" required>
</div>
<div class="form-group col-md-12">
 

<button type="submit" class="form-control" value ="submit">submit</button>
</body>
</html>