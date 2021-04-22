<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="static\css\home.css" rel="stylesheet" >
    <link href="deep_Learning.css" rel="stylesheet" ">
   <title>Python</title>
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

        <div class="left_body">
            <div class="left_body_wrapper">

                <h6 class="topic_header">Python Topics</h6>
                <a href="introduction_py.php" class="topic">Introduction</a>
                <a href="Learning_path.php" class="topic">Learning Path</a>
                <a href="Python_basic_syntax.php" class="topic">Python Basic Syntax</a>
                <a href="Python_variable_types.php" class="topic">Python Variable Types</a>
                <a href="Python_basic_operators.php" class="topic">Python Basic Operators</a>
                <a href="Python_decision_making.php" class="topic">Python Decision Making</a>
                <a href="Python_variable.php" class="topic">Python Variable</a>
                <a href="Python_strings.php" class="topic">Python Strings</a>
            </div>
        </div>
        <div class="middle_body">
       <h1> Welcome to Python course </h1>
<p>Python is a general-purpose interpreted, interactive, object-oriented, and high-level programming language. It was created by Guido van Rossum during 1985- 1990. Like Perl, Python source code is also available under the GNU General Public License (GPL). This tutorial gives enough understanding on Python programming language.</p>
  <h2>Why to Learn Python?</h2>
<p>Python is a high-level, interpreted, interactive and object-oriented scripting language. Python is designed to be highly readable. It uses English keywords frequently where as other languages use punctuation, and it has fewer syntactical constructions than other languages.</p>  
<p>Python is a MUST for students and working professionals to become a great Software Engineer specially when they are working in Web Development Domain. I will list down some of the key advantages of learning Python:</p>
<ul>
<li><h4>Python is Interpreted </h4>Python is processed at runtime by the interpreter. You do not need to compile your program before executing it. This is similar to PERL and PHP. </li>
<li><h4>Python is Interactive </h4>You can actually sit at a Python prompt and interact with the interpreter directly to write your programs.</li>
<li><h4>Python is Object-Oriented </h4>Python supports Object-Oriented style or technique of programming that encapsulates code within objects</li>
</ul>
<h3>Characteristics of Python</h3>
<p>Following are important characteristics of Python Programming −</p>
<ul>
    <li>It supports functional and structured programming methods as well as OOP.</li>
    <li>It can be used as a scripting language or can be compiled to byte-code for building large applications.</li>
    <li>It provides very high-level dynamic data types and supports dynamic type checking.</li>
    <li>It supports automatic garbage collection</li>
    <li>It can be easily integrated with C, C++, COM, ActiveX, CORBA, and Java</li>
</ul>

  <br><br>




</div>
        <div class="right_body">
            <p>this is right side</p>
            <p>this is right side</p>
            <p>this is right side</p>
            <p>this is right side</p>
            <p>this is right side</p>


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
    </body>

</html>