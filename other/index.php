<?php
   session_start();
   $connect=mysqli_connect("localhost","root","","e_learn");
   if(isset($_POST['login'])){
    $userName=$_POST["username"];
    $PassWord=$_POST["password"];
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="style.css">
    <title>Log In</title>
</head>
<body>
    <div class="row"> 
        <div class="col-lg-5 m-auto">
            <div class="card  bg-dark mt-5">
            <!--CARD HEADING--> 
                <div class="card-title text-center mt-3"> 
                    <h1 class="text-danger">Road To Approach Become A Data Scientist</h1> 
                </div>
            <!--CARD Information Box--> 
                <div class="card-body"> 
                    <form action="index.php" method="POST" class="box">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <!--Info Icon--> 
                                <span class="input-group-text">
                                    <i class="fa fa-user fa-2x"></i>
                                </span>
                            </div>
                            <!--Info Box--> 
                            <input type="text" class="form-control py-4" placeholder="Type Your User Name">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <!--Info Icon--> 
                                <span class="input-group-text">
                                    <i class="fa fa-lock fa-2x"></i>
                                </span>
                            </div>
                            <!--Info Box--> 
                            <input type="password" class="form-control py-4" placeholder="Type Your Password">
                        </div>
                        <button name="login" class="btn btn-success">Log In</button>
                        <p class="float-right text-white"><input type="checkbox"> Remember Me</p>
                        <br>
                        <a href="#" class="text-danger">Forgot Password?</a>
                        <br>
                        <a href="registration.php" target="_blank" class="new">Create New Account.</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>  
</body>
</html>