<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
if(login_check($mysqli) == true) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
	<link type="text/css" rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.2.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.6/bootstrap.min.js"></script>
	<!--[if IE]>
	<script src="https://stephenmccready.asia/html5shiv.min.js"></script>
	<![endif]-->
	<script src="js/mi.js"></script>
	<link rel="stylesheet" href="css/main.css" />
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="container-fluid">
	<div class="jumbotron lessonHeaderLeft">
	  	<p>Welcome <?php echo htmlentities($_SESSION['username']) . " (" . $_SESSION['user_id'] . ")"; ?></p>
		<?php getMemberLevel ($_SESSION['user_id'],$mysqli);
			echo '<i>Access up to level ' . htmlentities($_SESSION['memberlevel'])
				. ' from ' . htmlentities($_SESSION['from_date']) . ' to ' . htmlentities($_SESSION['thru_date']) . '</i>';
		?>
	</div>
<?php
} else { header( 'Location: https://www.stephenmccready.asia/mi/index.php'); }
?>
</body>
</html>
