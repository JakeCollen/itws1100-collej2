<?php

function check_login($conn)
{

	if(isset($_SESSION['userId']))
	{

		$id = $_SESSION['userId'];
		$query = "select * from users where userId = '$id' limit 1";

		$result = mysqli_query($conn,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	header("Location: quiz3/resources/login.php");
	die;

}
