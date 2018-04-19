<?php 
	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");
 ?>



<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
</head>
<body>
<div id="inputContainer">
	<form id="registerform" action="register.php" method= "POST">


		<h2>Login to your account</h2>
		<p>
			
			<label for="loginuserName">Username</label>
			<input id="loginuserName" type="text" name="loginuserName" placeholder="e.g stacy" required>
		</p>

		<p>
			<label for="loginpassword">Password</label>
			<input id="loginpassword" type="password" name="loginpassword" required>
		</p>

		<button type="Submit" value="Submit" name="submit">login</button>
	</form>



	<form id="loginForm" action="register.php" method="POST">
		<h2>Register for free</h2>
		<p>
			<label for="loginuserName">Username</label>
			<input id="loginuserName" type="text" name="loginuserName" placeholder="e.g stacy" required>
		</p>
		<p>
			<label for="firstname">first name</label>
			<input id="firstname" type="text" name="firstname" placeholder="e.g stacy" required>
		</p>
		<p>
			<label for="lastname">last name</label>
			<input id="lastname" type="text" name="lastname" placeholder="e.g reddy" required>
		</p>
		<p>
			<label for="email">Email</label>
			<input id="email" type="email" name="email" placeholder="e.g redstacy@gamil.com" required>
		</p>
		<p>
			<label for="email2">Username</label>
			<input id="email2" type="email" name="email2" placeholder="e.g redstacy@gamil.com" required>
		</p>
		<p>
			<label for="login1password">Your Password</label>
			<input id="login1password" type="password" name="login1password" required>
		</p>

		<p>
			<label for="login2password">Re-enter Password</label>
			<input id="login2password" type="password" name="login2password" required>
		</p>
		<button type="submit" name="regbutton">sign up</button>
	</form>

</div>
</body>
</html>