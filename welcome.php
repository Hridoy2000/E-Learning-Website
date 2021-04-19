<?php 
include_once('config.php');
$query="SELECT * from cse417";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <!--<div class="container fluid"> -->
         <div class=" Main_wrapper">
    <div class="nav_bar">
        <div class="logo">
            <img src="images\innovation_icon1.png" class="nav_bar_icon">
            <h5 class="nav_bar_logo_name">AI LEARNERS</h5>
        </div>
        <div class="menu_name">
            <ul class="ul_nav">
                <li class="item"><a class="link active" aria-current="page" href="#">Home</a></li>
                <li class="item"><a class="link active" aria-current="page" href="#">Artificial Intellegence</a></li>
                <li class="item"><a class="link active" aria-current="page" href="#">Machine Learning</a></li>
                <li class="item"><a class="link active" aria-current="page" href="#">Deep Learning</a></li>
                <li class="item"><a class="link active" aria-current="page" href="#">Robotics</a></li>
                <li class="item"><a class="link active" aria-current="page" href="#">Autonomus System</a></li>
            </ul>
        </div>
    </div>
    <div class="d-flex bg-dark mb-5">
        <?php echo "<h1>Welcome ". $_SESSION['username'] ."</h1>"; ?> 
         </div>
    <div class="main_body">
        <div class="left_body">
            <div class="left_body_wrapper">
                <h6 class="topic_header">Artificial Intellegence Topics</h6>
                <a href="#" class="topic">Learning Path</a>
                <a href="#" class="topic">Introduction</a>
                <a href="#" class="topic">Basic</a>
                <a href="#" class="topic">Introduction</a>
                <a href="#" class="topic">Introduction</a>
                <a href="#" class="topic">Introduction</a>
                <a href="#" class="topic">Introduction</a>
                <a href="#" class="topic">Introduction</a>
                <h6 class="topic_header">Topic2</h6>
                <a href="#" class="topic">Learning Path</a>
                <a href="#" class="topic">Introduction</a>
                <a href="#" class="topic">Basic</a>
                <a href="#" class="topic">Introduction</a>
                <a href="#" class="topic">Introduction</a>
                <a href="#" class="topic">Introduction</a>
                <h6 class="topic_header">Topic3</h6>
                <a href="#" class="topic">Introduction</a>
                <a href="#" class="topic">Introduction</a>
                <a href="#" class="topic">Introduction</a>
                <a href="#" class="topic">Introduction</a>
                <a href="#" class="topic">Introduction</a>
                <a href="#" class="topic">Introduction</a>
            </div>
        </div>
        <div class="middle_body">
            <p>this is middle sidethis is middle sidethis is middle sidethis is middle sidethis is middle sidethis is
                middle sidethis is middle sidethis is middsasdfdsafasfadsfasdf dsafafasdfdle sideee</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle sidethis is middle sidethis is middle sidethis is middle sidethis is middle sidethis is
                middle sidethis is middle sidethis is middsasdfdsafasfadsfasdf dsafafasdfdle sideee</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle sidethis is middle sidethis is middle sidethis is middle sidethis is middle sidethis is
                middle sidethis is middle sidethis is middsasdfdsafasfadsfasdf dsafafasdfdle sideee</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle sidethis is middle sidethis is middle sidethis is middle sidethis is middle sidethis is
                middle sidethis is middle sidethis is middsasdfdsafasfadsfasdf dsafafasdfdle sideee</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle sidethis is middle sidethis is middle sidethis is middle sidethis is middle sidethis is
                middle sidethis is middle sidethis is middsasdfdsafasfadsfasdf dsafafasdfdle sideee</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle sidethis is middle sidethis is middle sidethis is middle sidethis is middle sidethis is
                middle sidethis is middle sidethis is middsasdfdsafasfadsfasdf dsafafasdfdle sideee</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
            <p>this is middle side</p>
        </div>
        <div class="right_body">
            <p>this is right side</p>
            <p>this is right side</p>
            <p>this is right side</p>
            <p>this is right side</p>
            <p>this is right side</p>
        </div>
    </div>
    <button type="button" class="btn btn-primary btn-lg btn-block"><a href="quize.php" target="_blank" rel="noopener noreferrer">Attempt For Quize</a></button>
    <div class="footer">
        <div class="footer_wrapper">
            <div class="left_footer">
                <h5 class="footer_h5">AI Learners</h5>
                <a href="#"><img src="images\facebook_icon.png" class="footer_icon"></a>
                <a href="#"><img src="images\twitter_icon.png" class="footer_icon"></a>
                <a href="#"><img src="images\youtube_icon.png" class="footer_icon"></a>
                <a href="#"><img src="images\instagram_icon.png" class="footer_icon"></a>
            </div>
            <div class="middle_footer middle_footer1">
                <p class="footer_p">Support</p>
                <a href="#" class="footer_link">Contact Us</a>
                <a href="#" class="footer_link">FAQ</a>
                <a href="#" class="footer_link">Lecture</a>
            </div>
            <div class="right_footer">
                <p class="footer_p">AI Learners</p>
                <a href="#" class="footer_link">About Us</a>
                <a href="#" class="footer_link">Careers</a>
                <a href="#" class="footer_link">Access</a>
            </div>
            <div class="sign_up_footer">
                <span class="footer_h4">Stay up to date on the latest from AI Learners</span>
                <input type="email" placeholder="Enter  your email" class="input_email_for_sign_up">
                <input type="button" value="Sign Up" class="sign_up_btn">
            </div>
        </div>
    </div>
    <div class="copyright">
        
        <small class="footer__copyright">© 2021 Copyright</small>
    </div>
    </div>
    <br>
        <button type="button" class="btn btn-primary btn-lg btn-block "><a href="logout.php"><p class="text-dark mt-2 font-weight-bold">LOGOUT</p></a> </button>
    <!--</div>-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>