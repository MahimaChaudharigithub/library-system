
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-4.4.1/css/bootstrap.min.css" rel="stylesheet">
    
    <title>Document</title>
    <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-image: url("image/library.jpg");


  }
  </style>
</head>

<body>
    <?php include 'navbar1.php';?>
<section>
    <div class="container">
        <div class="row">
            <div class="col 12 col-sm-8 col-md-6 m-auto ">
                <div class="card" style="margin-top:50px;">
                    <div class="card-title offset-sm-5 mt-2">
                        <h3>Register</h3>
                    </div>

                    <div class="card-body">
                        <form action="registerlink.php" method="post" id="login">

                  <input type="text" class="form-control my-3 py-2" name="rollno"  placeholder="Roll no" required>
                           
                        <input type="text" class="form-control my-4 py-2" name="fname" placeholder="First Name" >
                        <input type="text" class="form-control my-4 py-2" name="lname" placeholder="Last Name" >
                        <input type="email" class="form-control my-4 py-2" name="email" placeholder="email" >
                        <input type="password" class="form-control my-4 py-2" name="pass" max=6    placeholder="password" required>
                            <div class="text-center mt-3 col-sm-3">
                            <button type="submit" class="form-control btn btn-primary" value ="Register">register</button>
                             
                            </div>
                           
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
<? php include('footer.php');?>
