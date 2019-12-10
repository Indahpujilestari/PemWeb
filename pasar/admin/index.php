<!DOCTYPE html>
<html>
<head>
	<title>Pasar-Login</title>
</head>
<body>
<fieldset>
	<legend>Login Admin</legend>
	<form method="POST" action="PLogin.php" onsubmit="return validateForm()">
			<label>Username</label>
			<input type="text" name="username" required>  <br/>
			<label>Password</label>
			<input type="password" name="password" required=> <br/>
			<button type="submit">
				Login
			</button>
	</form>
</fieldset>
</body>
</html>