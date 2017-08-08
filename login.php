 <?php 
session_start();

include("config.php");
$username = $_POST["username"];
$password = $_POST["password"];

$match = "select user_id from $table where username = '".$_POST['username']."'
and password = '".$_POST['password']."';"; 
$qry = mysql_query($match);
$num_rows = mysql_num_rows($qry); 

if ($num_rows <= 0) 
{ 
	echo "Sorry, there is no username $username with the specified password.";
	echo "Try again";
  $_SESSION['loggedin'] = false;
	exit; 
} 
else
{
	$_SESSION['user']= $_POST["username"];
	header("location:admin.php");
}
