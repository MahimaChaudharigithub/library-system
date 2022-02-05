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
<form name="addbook" method="post" action="addbookdb.php">
<div class="form-group col-md-12">
<center><h2 style="color:blue">add books</h2></center>
</div>
<div class="form-group col-md-12">
:<input type="text" class="form-control" name="ISBN"  placeholder="ISBN" required>
</div>
<div class="form-group col-md-12">
<input type="text" class="form-control" name="title" placeholder="Title of book" required>

</div>
<div class="form-group col-md-12">
<input type="text" class="form-control" name="language" placeholder="LANGUAGE" required>

</div>
<div class="form-group col-md-12">
<input type="text" class="form-control" name="Authors" placeholder="Authors" required >
</div>

<div class="form-group col-md-12">
<input type="text" class="form-control" name="Mrp"   placeholder="MRP">
</div>
<div class="form-group col-md-12">
<input type="date" class="form-control" name="date"   placeholder="DATE">

</div>

<div class="form-group col-md-12">
<input type="text" class="form-control" name="quenty"   placeholder="QUENTY">

</div>
<div class="form-group col-md-12">
 

<button type="submit" class="form-control" value ="submit">submit</button>
</body>
</html>