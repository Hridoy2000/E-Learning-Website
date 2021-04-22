<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="index1.css" rel="stylesheet" >
    <link href="static\css\home.css" rel="stylesheet" >
  
   <title>Home Page</title>
</head>
<body>
    <div class=" Main_wrapper">
        
        <div class="nav_bar">
            <div class="nav_bar_wrapper">
            <div class="logo">
                <img src="static\css\images\innovation_icon1.png" class="nav_bar_icon">
                <h5 class="nav_bar_logo_name">AI LEARNERS</h5>
            </div>
            <div class="menu_name">
                <ul class="ul_nav">
                <li class="item"><a class="link active" aria-current="page" href="{{ url_for('homepage') }}">Home</a></li>
                <li class="item"><a class="link active" aria-current="page" href="{{ url_for('ai') }}">Artificial Intellegence</a></li>
                <li class="item"><a class="link active" aria-current="page" href="{{ url_for('machinelearning') }}">Machine Learning</a></li>
                <li class="item"><a class="link active" aria-current="page" href="{{ url_for('deeplearning') }}">Deep Learning</a></li>
                <li class="item"><a class="link active" aria-current="page" href="{{ url_for('robotics') }}">Robotics</a></li>
                <li class="item"><a class="link active" aria-current="page" href="{{ url_for('python') }}">Python</a></li>
                <li class="item"><a class="link active" aria-current="page" href="{{ url_for('project') }}">Project Implementation</a></li>
                <li class="item signUp"><a class="link active" aria-current="page" href="{{ url_for('logout') }}">Sign Up</a></li>
                <li class="item signIn"><a class="link active" aria-current="page" href="{{ url_for('login') }}">Login</a></li>
                </ul>
                 </div>
             </div>
        </div>

        <div class="main_body">     
        <div class="search_bar">
                <div class="search_bar_image">

                </div>

          <div class="search_bar_wrapper">
                <form class="example" action="homepage.php">
                <input class = "search_text"type="text" placeholder="Search.." name="search">
                <button type="submit" class ="search_btn"><i class="fa fa-search"></i></button>
                 </form>
                 <h2 class="Info">Learn Without Limits <br> Build skills with courses, certificates, and degrees online</h2>
            </div>
            
            
        </div>
      
       




        <div class="footer">
            <div class="footer_wrapper">
                <div class="left_footer">
                     <h5 class="footer_h5">AI Learners</h5>
                     <a href="#"><img src="static\css\images\facebook_icon.png" class="footer_icon"></a>
                        <a href="#"><img src="static\css\images\twitter_icon.png" class="footer_icon"></a>
                    <a href="#"><img src="static\css\images\youtube_icon.png" class="footer_icon"></a>
                     <a href="#"><img src="static\css\images\instagram_icon.png" class="footer_icon"></a>
                </div>


                 <div class="middle_footer middle_footer1">
                    <p class="footer_p">Support</p>
                    <a href="#" class="footer_link">Contact Us</a>
                    <a href="#" class="footer_link">FAQ</a>
                    <a href="#" class="footer_link">Lecture</a>
                 </div>


                <div class="right_footer">
                <p class="footer_p">AI Learners</p>
                <a href="homepage.php" class="footer_link">About Us</a>
                <a href="homepage.php" class="footer_link">Careers</a>
                <a href="homepage.php" class="footer_link">Access</a>
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
</body>
</html>