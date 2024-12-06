<?php 
    session_start();
	if (!isset($_SESSION['userId'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: quiz3/resources/login.php');
	}
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: quiz3/resources/login.php");
	}
	include("connection.php");
?>

<?php
include('quiz3/resources/doc.php');
?>

<title>Jake's Website</title>

<?php
include('quiz3/resources/header.php');
?>

Jake's Website
<li><a href="index.php">Home</a></li>
<li><a href="projects/projects.html">Projects</a></li>
<li><a href="quiz3/resources/login.php">Login</a></li>

<?php
include('quiz3/resources/resume.php');
?>
<?php
include('quiz/resources/closing.php');
?>