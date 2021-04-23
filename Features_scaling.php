<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="\E-Learning-Website\home.css" rel="stylesheet" ">
    <link href="deep_Learning.css" rel="stylesheet" ">
   <title>Machine Learning</title>
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
                <li class="item"><a class="link active" aria-current="page" href="Introduction_ml.php">Machine Learning</a></li>
                <li class="item"><a class="link active" aria-current="page" href="\E-Learning-Website\topic\Deep_learning\introduction_dl.php">Deep Learning</a></li>
                <li class="item"><a class="link active" aria-current="page" href="\E-Learning-Website\topic\Robotics\introduction_robotic.php">Robotics</a></li>
                <li class="item"><a class="link active" aria-current="page" href="\E-Learning-Website\topic\python\introduction_py.php">Python</a></li>
                <li class="item signUp"><a class="link active" aria-current="page" href="\E-Learning-Website\topic\sign_up\sign_up.php">Sign Up</a></li>
                <li class="item signIn"><a class="link active" aria-current="page" href="\E-Learning-Website\topic\sign_in\sign_in.php">Login</a></li>
            </ul>
        </div>
    </div>
    <div class="main_body">

        <div class="left_body">
            <div class="left_body_wrapper">

                <h6 class="topic_header">Deep Learning Topics</h6>
                <a href="Introduction_ml.php" class="topic">Introduction</a>
                <a href="Learning_path_ml.php" class="topic">Learning Path</a>
                <a href="Data_preprocessing.php" class="topic">Data Preprocessing</a>
                <a href="Features_scaling.php" class="topic">Features Scaling</a>
                <a href="Gradient_descent.php" class="topic">Gradient Descent</a>
                <a href="Linear_regression.php" class="topic">Linear Regression </a>
                <a href="Logistic_regression.php" class="topic">Logistic Regression </a>
                <a href="Decision_tree.php" class="topic">Decision Tree </a>
                <a href="Regression_vs_classification.php" class="topic">Regression vs. classification</a>
            </div>
        </div>
        <div class="middle_body">
       <h1> Introduction to Feature Scaling </h1>
<p>I was recently working with a dataset that had multiple features spanning varying degrees of magnitude, range, and units. This is a significant obstacle as a few machine learning algorithms are highly sensitive to these features.

I’m sure most of you must have faced this issue in your projects or your learning journey. For example, one feature is entirely in kilograms while the other is in grams, another one is liters, and so on. How can we use these features when they vary so vastly in terms of what they’re presenting?.</p>       
<h2>Why Should we Use Feature Scaling?</h2>
<p>The first question we need to address – why do we need to scale the variables in our dataset? Some machine learning algorithms are sensitive to feature scaling while others are virtually invariant to it. Let me explain that in more detail.</p>
<h2>How to perform feature scaling?</h2>

<ul> 
<li> Min Max Scaler</li>
<li> Standard Scaler</li>
<li> Max Abs Scaler</li>
<li> Robust Scaler</li>
<li> Quantile Transformer Scaler</li>
<li> Power Transformer Scaler</li>
<li> Unit Vector Scaler</li>
</ul>
  <h2>Final Note:</h2>
   <p>Feature scaling is an essential step in Machine Learning pre-processing. Deep learning requires feature scaling for faster convergence, and thus it is vital to decide which feature scaling to use. There are many comparison surveys of scaling methods for various algorithms. Still, like most other machine learning steps, feature scaling too is a trial and error process, not a single silver bullet</p>

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