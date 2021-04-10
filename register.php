<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Tours and Travels</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<main>
  
  </main>
  <div class="header">
  	<h2>Register</h2>
  </div>
	 <div id="form">
            <form action="" id="registration_form" method="GET">
  
  	<?php include('error.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	 <input type="submit" name="submit" class="btn" value="Submit" >
	
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>