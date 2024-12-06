<?php 
session_start();

	include("connection.php");
	include("functions.php");
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