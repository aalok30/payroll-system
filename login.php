<?php
include('config.php');

 if (isset($_POST['uname']) && isset($_POST['pass'])) 
  {
  $username =$_POST['uname'];
  $password =$_POST['pass'];
  

  $sql ="select * from fact_user where username = '$username' and password = '$password'";
  $result =mysqli_query($con,$sql);
  $r=mysqli_fetch_assoc($result);

  if($r  && count($r))
  {   
      echo "<script>window.open('dashboard.php','_self')</script>";  
      session_start();
      $_SESSION['uname']=$username;
      $_SESSION['fact_uname']="name";
  }  
  else{  
      echo '<script>alert("Invalid Username & Password")</script>';
  } 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
.divider:after,
.divider:before {
  content: "";
  flex: 1;
  height: 1px;
  background: #eee;
}
    </style>
</head>
<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
              <img src="plugins/images/logo.png" class="img-fluid" alt="Logo">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">

            <!--Start Form-->
              <form action="login.php" method="post">
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" name="uname" class="form-control form-control-lg" data-val-required="User name is required." placeholder="Enter Username">
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" name="pass" class="form-control form-control-lg" 
                  data-val-required="Password required." placeholder="Enter Password">
                </div>
                <div class="d-flex justify-content-around align-items-center mb-4">
                  <a href="#!">Forgot password?</a>
                </div>
      
                <input type="submit" name="submit" value="Login" class="btn btn-primary btn-lg btn-block">
              </form>
            </div>
          </div>
        </div>
      </section>
</body>
</html>