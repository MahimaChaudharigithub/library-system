<?php
include 'header.php';
include 'connect.php';?>

<html>
<head>
<link style="stylesheet" href="style1.css">
<style>

</style></head>
<body>


<form id="login" method="post" action="login.php">

<center><h2 style="color:blue">user login</h2></center>
<label>Roll NO </label><br>
<input type="text" class="form-control" name="rollno"  placeholder="Roll no" required><br>
</div><br>
<label>Password </label><br>
<input type="password" class="form-control" name="pass" max=6    placeholder="password" required>

</div>
 <button type="submit" class="form-control"   name="login" value ="login">login</button>


</form>

</div>
</body>
</html>