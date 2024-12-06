<?php 
session_start();

	include("quiz3/resources/connection.php");
	include("quiz3/resources/functions.php");

	$user_data = check_login($conn);

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

<?php
include('quiz3/resources/resume.php');
?>

<?php
include('quiz/resources/closing.php');
?>