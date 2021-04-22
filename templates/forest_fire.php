<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>Starter Template - Materialize</title>
  <link href="static\css\materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="static\css\style.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="static\css\home.css" rel="stylesheet" >
</head>

<body>
  <div class="nav_bar">
    <div class="nav_bar_wrapper">
      <div class="logo">
        <img src="static\css\images\innovation_icon1.png" class="nav_bar_icon">
        <h5 class="nav_bar_logo_name">AI LEARNERS</h5>
      </div>
      <div class="menu_name">
        <ul class="ul_nav">
          <li class="item"><a class="link active" aria-current="page" href="{{ url_for('homepage') }}">Home</a></li>
          <li class="item"><a class="link active" aria-current="page" href="{{ url_for('ai') }}">Artificial
              Intellegence</a></li>
          <li class="item"><a class="link active" aria-current="page" href="{{ url_for('machinelearning') }}">Machine
              Learning</a></li>
          <li class="item"><a class="link active" aria-current="page" href="{{ url_for('deeplearning') }}">Deep
              Learning</a></li>
          <li class="item"><a class="link active" aria-current="page" href="{{ url_for('robotics') }}">Robotics</a></li>
          <li class="item"><a class="link active" aria-current="page" href="{{ url_for('python') }}">Python</a></li>
          <li class="item"><a class="link active" aria-current="page" href="{{ url_for('project') }}">Project
              Implementation</a></li>
          <li class="item signUp"><a class="link active" aria-current="page" href="{{ url_for('logout') }}">Sign Up</a>
          </li>
          <li class="item signIn"><a class="link active" aria-current="page" href="{{ url_for('login') }}">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Forest Fire Prevention</h1>
      <div class="row center">
        <h5 class="header col s12 light">Predict the probability of Forest-Fire Occurence
          <br>
        </h5>
      </div>

      <div class="row">
        <form action="{{url_for('predict')}}" method="post" class="col s12">
          <div class="row">
            <div class="input-field col s4">
              <label for="first_name"><b>Temperature</b></label>
              <br>
              <input placeholder="Temperature in Celsius" name="Temperature" id="first_name" type="text"
                class="validate">
            </div>
            <div class="input-field col s4">

              <label for="last_name"><b>Oxygen </b></label>
              <br>
              <input id="last_name" name="Oxygen" placeholder="Oxygen content in ppm" type="text" class="validate">

            </div>

            <div class="input-field col s4">
              <label for="_name"><b>Humidity</b></label>
              <br>
              <input id="_name" name="Humidity" placeholder="Humidity %" type="text" class="validate">

            </div>

          </div>

          <div class="row center">

            <button type="submit" class="btn-large waves-effect waves-light orange">Predict Probability</button>
          </div>
        </form>
      </div>
      <br>{{pred}}<br>

      <a href="{{ url_for('project') }}"><strong> Back </strong></a>
      <br> <br>
      Here is the Code Description of This  model
      <a href="{{ url_for('code_description') }}" class = "code_description_link" >Code Description </a>
      <br>
    <style>
     a .code_description_link {
       margin-left:20px;
     }

    </style>
      
      

    </div>
  </div>
  </div>
  </div>



  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="static\js\materialize.js"></script>
  <script src="static\js\init.js"></script>

</body>

</html>