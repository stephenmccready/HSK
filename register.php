<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Secure Login: Registration Form</title>
	<link type="text/css" rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.2.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.6/bootstrap.min.js"></script>
	<!--[if IE]>
	<script src="https://stephenmccready.asia/html5shiv.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="styles/main.css" />
	<script type="text/JavaScript" src="js/sha512.js"></script> 
	<script type="text/JavaScript" src="js/forms.js"></script>
</head>
<body>
		<?php
		if (!empty($error_msg)) {
			echo $error_msg;
		}
		?>
		<ul>
			<li>Usernames may contain only digits, upper and lowercase letters and underscores</li>
			<li>Emails must have a valid email format</li>
			<li>Passwords must be at least 6 characters long</li>
			<li>Passwords must contain
				<ul>
					<li>At least one uppercase letter (A..Z)</li>
					<li>At least one lowercase letter (a..z)</li>
					<li>At least one number (0..9)</li>
				</ul>
			</li>
			<li>Your password and confirmation must match exactly</li>
		</ul>
		<form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" 
				method="post" 
				name="registration_form">
			Username: <input type='text' 
				name='username' 
				id='username' /><br>
			Email: <input type="text" name="email" id="email" /><br>
			Password: <input type="password" name="password" id="password"/><br>
			Confirm password: <input type="password" name="confirmpwd" id="confirmpwd" /><br>
			<input type="button" value="Register" onclick="return regformhash(this.form, this.form.username, this.form.email, this.form.password, this.form.confirmpwd);" /> 
		</form>
		<p>Return to the <a href="index.php">login page</a>.</p>
	</body>
</html>
