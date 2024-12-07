<?php 
    session_start();
	if (!isset($_SESSION['userId'])) {
		$_SESSION['status'] = '<li><a href="quiz3/resources/login.php">Login</a></li>';
		header('location: login/login.php');
	}
?>

<?php
include('resources/doc.php');
?>

<title>Jake's Website</title>

<?php
include('resources/header.php');
?>

Jake's Website
<li><a href="index.php">Home</a></li>
<li><a href="projects/projects.html">Projects</a></li>
<?php echo $_SESSION['status'] ?>
<li>Welcome, <?php echo $_SESSION['username']; ?></li>

<?php
include('resources/resume.php');
?>
<?php
include('resources/closing.php');
?>