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
       <h1>Python - Variable Types </h1>

<p>
Variables are nothing but reserved memory locations to store values. This means that when you create a variable you reserve some space in memory.
Based on the data type of a variable, the interpreter allocates memory and decides what can be stored in the reserved memory. Therefore, by assigning different data types to variables, you can store integers, decimals or characters in these variables.
Assigning Values to Variables
Python variables do not need explicit declaration to reserve memory space. The declaration happens automatically when you assign a value to a variable. The equal sign (=) is used to assign values to variables.
The operand to the left of the = operator is the name of the variable and the operand to the right of the = operator is the value stored in the variable. For example −
Live Demo</p>
<p>
#!/usr/bin/python

counter = 100          # An integer assignment
miles   = 1000.0       # A floating point
name    = "John"       # A string

print counter
print miles
print name
Here, 100, 1000.0 and "John" are the values assigned to counter, miles, and name variables, respectively. This produces the following result −
100
1000.0
John
Multiple Assignment
Python allows you to assign a single value to several variables simultaneously. For example −
a = b = c = 1
Here, an integer object is created with the value 1, and all three variables are assigned to the same memory location. You can also assign multiple objects to multiple variables. For example −
a,b,c = 1,2,"john"
Here, two integer objects with values 1 and 2 are assigned to variables a and b respectively, and one string object with the value "john" is assigned to the variable c.
Standard Data Types
The data stored in memory can be of many types. For example, a person's age is stored as a numeric value and his or her address is stored as alphanumeric characters. Python has various standard data types that are used to define the operations possible on them and the storage method for each of them.
Python has five standard data types −
<li>Numbers</li>
<li>String</li>
<li>List</li>
<li>Tuple</li>
<li>Dictionary</li>
Python Numbers
Number data types store numeric values. Number objects are created when you assign a value to them. For example −
var1 = 1
var2 = 10
You can also delete the reference to a number object by using the del statement. The syntax of the del statement is −
del var1[,var2[,var3[....,varN]]]]
You can delete a single object or multiple objects by using the del statement. For example −
del var
del var_a, var_b </p>

<p>Python supports four different numerical types −</p>
<li>int (signed integers)</li>
<li>long (long integers, they can also be represented in octal and hexadecimal)</li>
<li>float (floating point real values)</li>
<li>complex (complex numbers)</li>





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