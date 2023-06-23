<?php
include 'navbar1.php';
include 'connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstrap-4.4.1/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-image: url("image/library.jpg");


  }
</style>
<body >
 <section>
    <div class="container">
        <div class="row">
            <div class="col 12 col-sm-8 col-md-6 m-auto ">
                <div class="card" style="margin-top:50px;">
                    <div class="card-title offset-sm-5">
                        <h3>Login</h3>
                    </div>

                    <div class="card-body">
                        <form action="login.php" method="post" id="login">

                            <input type="text" name="rollno" id="" class="form-control my-3 py-2" placeholder="Roll no" required>
                            <input type="text" name="pass" id="" class="form-control my-3 py-2" placeholder="Password" required>
                            <div class="text-center mt-3">
                                <button class="btn btn-primary">Login</button>
                            </div>
                            <p class=" mt-2" style="margin-left: 100px;">Alrady have an account?<a href="register.php" style="margin-left: 10px;" >

                            Sign Up</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
