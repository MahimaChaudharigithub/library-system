<?php
include 'header.php';
include 'connect.php';
?>
<html>
<head>
<link rel="stylesheet"  href="design.css">
</head>
<body>

<div class="login-area">
<div class="container">
<div class="login-box ptb--50">
<form name="login" method="post" action="adminlink.php">
<div class="form-group col-md-12">
<center><h2 style="color:blue">Admin LogIn</h2></center>

</div>
<div class="form-group col-md-12">
<input type="text" class="form-control" name="id" max=6 placeholder="id" required>
<br><p id="error" class ="error1"></p><br>
<div class="form-group col-md-12">
<input type="password" class="form-control" name="pass" max=6 placeholder="Password" required><span id="pass" </span><br>
<p id="error" class ="error1"></p>
</div>
<div class="form-group col-md-12">
 <button type="submit" name="login" value ="Login" >Login</button></div>
<div> <a href="register.php" >registration</a> 


 </div>
 
 <div>
 
  

</form>


</div>
</div>
</div>
</body>
</html>
