
<html>
<head>
<link rel="stylesheet"  href="style1.css"></head>

<body>


	
<div class="login-area">
<div class="container">
<div class="login-box ptb--100">
<form name="login" method="post" action="registerlink.php">
<div class="form-group col-md-12">
<center><h2 style="color:blue">Registration</h2></center>
</div>
<div class="form-group col-md-12">
Roll NO :<input type="text" class="form-control" name="rollno"  placeholder="Roll no" required>
</div>
<div class="form-group col-md-12">
First name:<input type="text" class="form-control" name="fname" placeholder="First Name" >
</div>
<div class="form-group col-md-12">
Last Name :<input type="text" class="form-control" name="lname" placeholder="Last Name" >
</div>
<div class="form-group col-md-12">
email :<input type="email" class="form-control" name="email" placeholder="email" >
</div>


<div class="form-group col-md-12">
Password :<input type="password" class="form-control" name="pass" max=6    placeholder="password" required>

</div>
<div class="form-group col-md-12">
 

<button type="submit" class="form-control" value ="Register">register</button>
<button type="reset" class="form-control" value ="Reset" >Reset</button>
</div>
</form>
</div>
</div>
</div>
</body>
</html>
<? php include('footer.php');?>
