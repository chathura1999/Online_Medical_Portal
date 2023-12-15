<?php include('registerserver.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>User registration</title>
	<link rel="stylesheet" type="text/css" href="../css/register.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>

	<form method="POST" action="register.php">
		<!--display validation error here-->
		<?php include('registererrors.php') ?>
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name">
		</div>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Phone No</label>
			<input type="text" name="phoneno">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="password_2">
		</div>
		<div>
			<input type="radio" name="userType" checked value="Patient" value="Patient">&nbsp;Patient 
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
			Already a member? <a href="Payform.php">Sign in</a>
		</p>
	</form>

</body>
</html>