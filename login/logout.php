<?php

session_start();

if(isset($_SESSION['userId']))
{
	unset($_SESSION['userId']);
	unset($_SESSION['userType']);

}

header("Location: ../index.php");
die;