<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="\E-Learning-Website\home.css" rel="stylesheet" ">
    <link href="deep_Learning.css" rel="stylesheet" ">
   <title>Python</title>
</head>
<body>
    <div class=" Main_wrapper">
    <div class="nav_bar">
        <div class="logo">
            <img src="\E-Learning-Website\images\innovation_icon1.png" class="nav_bar_icon">
            <h5 class="nav_bar_logo_name">AI LEARNERS</h5>
        </div>
        <div class="menu_name">
            <ul class="ul_nav">
                <li class="item"><a class="link active" aria-current="page" href="\E-Learning-Website\homepage.php">Home</a></li>
                <li class="item"><a class="link active" aria-current="page" href="\E-Learning-Website\topic\artificial_intellegence\introduction_ai.php">Artificial Intellegence</a></li>
                <li class="item"><a class="link active" aria-current="page" href="\E-Learning-Website\topic\machine learning\Introduction_ml.php">Machine Learning</a></li>
                <li class="item"><a class="link active" aria-current="page" href="\E-Learning-Website\topic\Deep_learning\introduction_dl.php">Deep Learning</a></li>
                <li class="item"><a class="link active" aria-current="page" href="\E-Learning-Website\topic\Robotics\introduction_robotic.php">Robotics</a></li>
                <li class="item"><a class="link active" aria-current="page" href="introduction_py.php">Python</a></li>
                <li class="item signUp"><a class="link active" aria-current="page" href="\E-Learning-Website\topic\sign_up\sign_up.php">Sign Up</a></li>
                <li class="item signIn"><a class="link active" aria-current="page" href="\E-Learning-Website\topic\sign_in\sign_in.php">Login</a></li>

            </ul>
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
       <h1>Python - Basic Syntax</h1>

<p>
The Python language has many similarities to Perl, C, and Java. However, there are some definite differences between the languages.
First Python Program
Let us execute programs in different modes of programming.
Interactive Mode Programming
Invoking the interpreter without passing a script file as a parameter brings up the following prompt −
$ python
Python 2.4.3 (#1, Nov 11 2010, 13:34:43)
[GCC 4.1.2 20080704 (Red Hat 4.1.2-48)] on linux2
Type "help", "copyright", "credits" or "license" for more information.
>>>
Type the following text at the Python prompt and press the Enter −
>>> print "Hello, Python!"
If you are running new version of Python, then you would need to use print statement with parenthesis as in print ("Hello, Python!");. However in Python version 2.4.3, this produces the following result −
Hello, Python!
Script Mode Programming
Invoking the interpreter with a script parameter begins execution of the script and continues until the script is finished. When the script is finished, the interpreter is no longer active.
Let us write a simple Python program in a script. Python files have extension .py. Type the following source code in a test.py file −
Live Demo
print "Hello, Python!"
We assume that you have Python interpreter set in PATH variable. Now, try to run this program as follows −
$ python test.py
This produces the following result −
Hello, Python!
Let us try another way to execute a Python script. Here is the modified test.py file −
Live Demo
#!/usr/bin/python

print "Hello, Python!"
We assume that you have Python interpreter available in /usr/bin directory. Now, try to run this program as follows −
$ chmod +x test.py     # This is to make file executable
$./test.py
This produces the following result −
Hello, Python!
Python Identifiers
A Python identifier is a name used to identify a variable, function, class, module or other object. An identifier starts with a letter A to Z or a to z or an underscore (_) followed by zero or more letters, underscores and digits (0 to 9).
Python does not allow punctuation characters such as @, $, and % within identifiers. Python is a case sensitive programming language. Thus, Manpower and manpower are two different identifiers in Python.
Here are naming conventions for Python identifiers −
<li>Class names start with an uppercase letter. All other identifiers start with a lowercase letter.</li>
<li>Starting an identifier with a single leading underscore indicates that the identifier is private.</li>
<li>Starting an identifier with two leading underscores indicates a strongly private identifier.</li>
<li>If the identifier also ends with two trailing underscores, the identifier is a language-defined special name.</li>
</p>



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
                <a href="#"><img src="\E-Learning-Website\images\facebook_icon.png" class="footer_icon"></a>
                <a href="#"><img src="\E-Learning-Website\images\twitter_icon.png" class="footer_icon"></a>
                <a href="#"><img src="\E-Learning-Website\images\youtube_icon.png" class="footer_icon"></a>
                <a href="#"><img src="\E-Learning-Website\images\instagram_icon.png" class="footer_icon"></a>




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