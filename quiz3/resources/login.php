<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//read from database
			$query = "select * from mySiteUsers where username = '$username' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['userId'] = $user_data['userId'];
						header("Location: ../../index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

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
</ul>
<div id="box">
    <form method="post">
        <input id="text" type="text" name="username"><br><br>
        <input id="text" type="password" name="password"><br><br>

        <input id="button" type="submit" value="Login">
    </form>
</div>


<?php
include('quiz/resources/closing.php');
?>