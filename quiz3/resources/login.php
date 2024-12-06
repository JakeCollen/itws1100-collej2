<?php
session_start();
    $_SESSION;
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