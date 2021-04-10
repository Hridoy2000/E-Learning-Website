
<?php
   session_start();
   $connect=mysqli_connect("localhost","root","","e_learn");
   if(isset($_POST['submit'])){
       $firstName=$_POST["f_name"];
       $lastName=$_POST["l_name"];
       $gmail=$_POST["gmail"];
       $date=$_POST["dob"];
       $userName=$_POST["username"];
       $PassWord=$_POST["pass"];
       $rPassword=$_POST["r_password"];
       $query="INSERT INTO userinformation(f_name,l_name,gmail,dob,username,pass,r_password) VALUES($firstName,$lastName,$gmail,$date,$username,$PassWord,$rPassword)";
       $execute=mysqli_query($connect,$query);
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
    <title>Registraion</title>
</head>
<body>
    <div class="row"> 
        <div class="col-lg-5 m-auto">
            <div class="card  bg-dark mt-5">
            <!--CARD HEADING-->  
                <div class="card-title text-center mt-3"> 
                    <h1 class="text-danger">Fill Up The Form For Registration</h1>  
                </div>
                <!--CARD Information Box--> 
                <div class="card-body"> 
                    <form action="" class="box">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <!--Info Icon--> 
                                <span class="input-group-text">
                                    <i class="fas fa-male fa-4x"></i>
                                </span>
                            </div>
                            <!--Info Box--> 
                            <input type="text" class="form-control py-4" placeholder="Enter Your First Name">
                        </div>
                        <!--Info Icon--> 
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-male fa-4x"></i>
                                </span>
                            </div>
                            <!--Info Box--> 
                            <input type="text" class="form-control py-4" placeholder="Enter Your Last Name">
                        </div>
                       
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                             <!--Info Icon--> 
                                <span class="input-group-text">
                                    <i class="fas fa-envelope fa-2x"></i>
                                </span>
                            </div>
                             <!--Info Box--> 
                            <input type="text" class="form-control py-4" placeholder="Enter Your Email">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                             <!--Info Icon--> 
                                <span class="input-group-text">
                                    <i class="fas fa-birthday-cake fa-2x"></i>
                                </span>
                            </div>
                             <!--Info Box--> 
                            <input type="date" class="form-control py-4" placeholder="Enter Your Birth Date">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                             <!--Info Icon--> 
                                <span class="input-group-text">
                                    <i class="fa fa-user fa-2x"></i>
                                </span>
                            </div>
                             <!--Info Box--> 
                            <input type="text" class="form-control py-4" placeholder="Enter Your User Name">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                             <!--Info Icon--> 
                                <span class="input-group-text">
                                    <i class="fa fa-lock fa-2x"></i>
                                </span>
                            </div>
                             <!--Info Box--> 
                            <input type="password" class="form-control py-4" placeholder="Enter Your Password">
                             <!--Info Icon--> 
                            <span class="input-group-text ml-2">
                                <i class="fa fa-lock fa-2x"></i>
                            </span>
                             <!--Info Box--> 
                            <input type="password" class="form-control  py-4" placeholder="Enter Your Password Again">
                        </div>
                        <button name="submit" class="btn btn-success">Submit</button>
      <!--JS CDN--> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>  
</body>
</html>