<?php

session_start();

if(isset($_SESSION['userId']))
{
	unset($_SESSION['userId']);
}
if(isset(_$SESSION['userType']))
{
	unset($_SESSION['userType']);
}

header("Location: login.php");
die;
?>