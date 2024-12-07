<?php

$dbhost = "localhost";
$dbuser = "phpmyadmin";
$dbpass = "JaysonTatum0$";
$dbname = "mySite";

if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}