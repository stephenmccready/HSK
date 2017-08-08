<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
if (login_check($mysqli) == true) {
	$logged = 'in';
} else {
	$logged = 'out';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>MI</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.2.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.6/bootstrap.min.js"></script>
	<!--[if IE]>
	<script src="https://stephenmccready.asia/html5shiv.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="css/main.css" />
	<script type="text/JavaScript" src="js/sha512.js"></script> 
	<script type="text/JavaScript" src="js/forms.js"></script> 
</head>
<body>
<div class="jumbotron">
	<div class="container text-center">
		<h2>欢迎</h2><h5>huān yíng</h5><h5>(Welcome)</h5>
	</div>
</div>
<?php
if (isset($_GET['error'])) {
	echo '<p class="error">Error Logging In</p>';
}
?>
<div class="container">
	<form action="includes/process_login.php" method="post" name="login_form">
	<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input type="email" class="form-control" name="email" id="email" placeholder="邮箱 (Email)">
	</div>
	<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span></span>
		<input type="password" class="form-control" name="password" id="password" placeholder="密码 (Password)">
	</div>
	<div class="input-group">
		<p><input type="button" value="登录 (Login)" onclick="formhash(this.form, this.form.password);" /></p>
	</div>
	<div class="input-group">
		<p><a href='register.php'>注册新账号 Register a new account</a></p>
	</div>
	</form>
</div>
</body>
</html>
