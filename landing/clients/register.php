<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>FAB registration form</title>
  <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
 
  <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url('image2.jpg');">
	<div class="wrapper">
	<div class="header">
  	<h4>Register</h4>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
	  <div class="input-group">

  	  <label>Firstname</label>
		<i class="fa fa-user" aria-hidden="true"></i>
  	  <input type="text" name="firstname" placeholder="Enter your firstname here" value="<?php echo $firstname; ?>">
  	</div>
	  <div class="input-group">
  	  <label>Secondname</label>
		<i class="fa fa-user" aria-hidden="true"></i>
  	  <input type="text" name="secondname" placeholder="Enter your secondname here" value="<?php echo $secondname; ?>">
  	</div>	<div class="input-group">
  	  <label>Username</label>
		<i class="fa fa-user" aria-hidden="true"></i>
  	  <input type="text" name="username" placeholder="Enter your Usenname here" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
	  <i class="fa-solid fa-envelope"></i>
  	  <label for="">  Email</label>
		<br>
  	  <input type="email" name="email" placeholder="Enter your email here" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>  Password</label>
		<i class="fa fa-lock" aria-hidden="true"></i>
  	  <input type="password" placeholder="Enter your passward here" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
		<i class="fa fa-lock" aria-hidden="true"></i>
  	  <input type="password" placeholder="Confirm your passward" name="password_2">
  	</div>
  	<div class="button">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
	</div>
  
  </form>
</body>
</html>