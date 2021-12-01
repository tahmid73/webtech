<!DOCTYPE html>
<html>
<head>
	<title>Chat App</title>
	<style>
		#usernameErr,#passwordErr,#emailErr {
			color: red;
		}
	</style>
	<script src="jsValidation.js"></script>
</head>
<body>

	<h1>Registration Form</h1>

	<form name="RegistrationForm" action="RegistrationValidation.php" method="post" onsubmit="return isValidReg(this);"> 
		<label for="username">Username:</label>
		<input type="text" name="username" id="username">
		<a id="usernameErr"></a>
		<br><br>
		<label for="password">Password:</label>
		<input type="text" name="password" id="password">
		<a id="passwordErr"></a>
		<br><br>
		<label for="email">Email:</label>
		<input type="email" name="email" id="email">
		<a id="emailErr"></a>
		<br><br>
		<input type="submit" value="Submit">
		<br><br>
	</form>

</body>
</html>