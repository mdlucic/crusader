<?php 
#only logged in users can see contents of the application
session_start();

class user_error {

if(!isset($_SESSION['username']) || $_SESSION['username'] == "")
{
	echo "<p>You are not authorized to view this page. Login insted</p>";
	include("../view/login.php");
	die();
}
else 
{
	echo "<p>Welcome {$_SESSION['username']}<br><a href=../../src/model/logout.php>Logout</a></p>";
	include("time.php");
}
}

?>

