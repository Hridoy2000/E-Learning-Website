<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
</head>
<body>
    <div class="container"> 
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Font-Size</p>
			<div class="input-group">
				<input type="number" placeholder="Resize Font Size" name="fs" ?>" required  oninvalid="this.setCustomValidity('Email and Password Are Required')"
  onchange="this.setCustomValidity('')" >
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required oninvalid="this.setCustomValidity('Email and Password Are Required')"
  onchange="this.setCustomValidity('')">
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html>