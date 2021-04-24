<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="\E-Learning-Website\home.css" rel="stylesheet" ">
    <link href="deep_learning.css" rel="stylesheet" ">
   <title>Deep Learning</title>
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
                <li class="item"><a class="link active" aria-current="page" href="introduction_dl.php">Deep Learning</a></li>
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
                <a href="Introduction_dl.php" class="topic">Introduction</a>
                <a href="Learning_path.php" class="topic">Learning Path</a>
                <a href="single_neuron.php" class="topic">A Single Neuron</a>
                <a href="Deep_neural_networks.php" class="topic">Deep Neural Networks</a>
                <a href="Stochastic_gradient_descent.php" class="topic">Stochastic Gradient Descent</a>
                <a href="overfitting_underfitting.php" class="topic">Overfitting and Underfitting</a>
                <a href="Dropout.php" class="topic">Dropout</a>
                <a href="batch_normalization.php" class="topic">Batch Normalization</a>
                <a href="Binary_classification.php" class="topic">Binary Classification</a>
            </div>
        </div>
        <div class="middle_body">
       <h1> Deep Neural Networks </h1>
       <h2>Introduction</h2>
<p> 
In this lesson we're going to see how we can build neural networks capable of learning the complex kinds of relationships deep neural nets are famous for.
The key idea here is modularity, building up a complex network from simpler functional units. We've seen how a linear unit computes a linear function -- now we'll see how to combine and modify these single units to model more complex relationships.
</p>

<h2>Layers</h2>
   <p> Neural networks typically organize their neurons into layers. When we collect together linear units having a common set of inputs we get a dense layer.</p>
   <img class="image_introduction"src="{{url_for('static', filename='pic5.PNG')}}" alt="layer connections">
   <p>You could think of each layer in a neural network as performing some kind of relatively simple transformation. Through a deep stack of layers, a neural network can transform its inputs in more and more complex ways. In a well-trained neural network, each layer is a transformation getting us a little bit closer to a solution.
   </p>
<h2>The Activation Function</h2>
    <p>It turns out, however, that two dense layers with nothing in between are no better than a single dense layer by itself. Dense layers by themselves can never move us out of the world of lines and planes. What we need is something nonlinear. What we need are activation functions </p>
    <img class="image_introduction"src="{{url_for('static', filename='pic6.PNG')}}" alt="layer connections">
     <p>Without activation functions, neural networks can only learn linear relationships. In order to fit curves, we'll need to use activation functions.
    An activation function is simply some function we apply to each of a layer's outputs (its activations).
    </p>
    <img class="image_introduction"src="{{url_for('static', filename='pic7.PNG')}}" alt="layer connections">
    <p>The rectifier function has a graph that's a line with the negative part "rectified" to zero. Applying the function to the outputs of a neuron will put a bend in the data, moving us away from simple lines.
     When we attach the rectifier to a linear unit, we get a rectified linear unit or ReLU. (For this reason, it's common to call the rectifier function the "ReLU function".) Applying a ReLU activation to a linear unit means the output becomes max(0, w * x + b), which we might draw in a diagram like:
    </p>
    <img class="image_introduction"src="{{url_for('static', filename='pic8.PNG')}}" alt="layer connections">


<h2>Stacking Dense Layers</h2>
   <p>Now that we have some nonlinearity, let's see how we can stack layers to get complex data transformations.</p>
   <img class="image_introduction"src="{{url_for('static', filename='pic9.PNG')}}" alt="layer connections">
   <p>The layers before the output layer are sometimes called hidden since we never see their outputs directly.
   Now, notice that the final (output) layer is a linear unit (meaning, no activation function). That makes this network appropriate to a regression task, where we are trying to predict some arbitrary numeric value. Other tasks (like classification) might require an activation function on the output.
   </p>
<h2>Building Sequential Models</h2>
  <p>The Sequential model we've been using will connect together a list of layers in order from first to last: the first layer gets the input, the last layer produces the output. This creates the model in the figure above:</p>
  <img class="image_introduction"src="{{url_for('static', filename='pic10.PNG')}}" alt="layer connections">
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