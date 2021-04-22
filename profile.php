<?php 
include_once('config.php');
$query="SELECT * from cse417 WHERE $email='email'";
$result=mysqli_query($conn,$query);
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="">
</head>
<body>
<div class="container-fluid bg-light">
        <div class="logo">
          <img src="images\innovation_icon1.png" class="navbar-brand">
            <?php echo "<h4>Welcome ". $_SESSION['username'] . "</h4>"; ?>
        </div>   
        <div>
        <?php
            while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <label for=""><h3>ID:</h3></label><h3><?php echo $rows['id']?> </h3>
                    <br>
                    <label for=""><h3>Username:</h3></label><h3> <?php echo $rows['username']?></h3>
                    <br>
                    <label for=""><h3>Email:</h3></label><h3> <?php echo $rows['email']?></h3>
                    <br>
                    <label for=""><h3>Password:</h3></label><h3> <?php echo $rows['password']?></h3>
                    <br>
        <?php
             }
        ?>
        </div>
    </table>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="custom.js"></script>
</body>
</html>
