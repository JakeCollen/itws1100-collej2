<?php
include('quiz3/resources/connection.php');
?>

<?php
include('quiz3/resources/functions.php');
?>

<?php
session_start();
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $username=$_POST['username'];
        $password=$_POST['password'];

        if(!empty($username) && !empty($password))
        {
            $query="select * from mySiteUsers where username='$username' limit 1";
            $result=mysqli_query($conn, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data=mysqli_fetch_assoc($result);
                    if($user_data['password'] === $password)
                    {
                        $_SESSION['userId'] = $user_data['userId'];
                        header("Location: ../../index.php");
                        die;
                    }
                    echo 'fifth issue';
                }
                echo 'fourth issue';
            }
            echo 'third issue';
        }
        echo 'second issue';
    }
    echo 'first issue';
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