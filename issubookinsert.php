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
<form name="issubookinsert" method="post" action="issubookdb.php">
<div class="form-group col-md-12">
<center><h2 style="color:blue">issubook insert</h2></center>
</div>
<div class="form-group col-md-12">
<b>Rollno:</b><input type="text" class="form-control" name="rollno"  placeholder="Roll no" required>
</div>
<div class="form-group col-md-12">
<b>title</b><input type="text" class="form-control" name="title" placeholder="Title of book" required>

</div>
<div class="form-group col-md-12">
<b>issudate</b><input type="date" class="form-control" name="issudate" placeholder="issu_date" required>

</div>
<div class="form-group col-md-12">
<b>renew date</b><input type="date" class="form-control" name="renewdate" placeholder="renew_date" required >
</div>





<div class="form-group col-md-12">
<b>fine</b><input type="text" class="form-control" name="fine"   placeholder="fine">

</div>
<div class="form-group col-md-12">
 

<button type="submit" class="form-control" value ="submit">submit</button>
</body>
</html>