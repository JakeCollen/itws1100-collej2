<!DOCTYPE html>


<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My Projects Home Page</title>
        <link href="../resources/header.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="../resources/projects_list.js"></script>
    </head>


    <body>
        <?php
            $connOk = false;
            @$conn = new mysqli('localhost', 'phpmyadmin', 'JaysonTatum0$', 'mySite');
            if ($conn->connect_error) {
                echo '<div class="messages">Database Connection Error: ';
                echo $conn->connect_errno . ' - ' . $conn->connect_error . '</div>';
            } else {
                $connOk = true;
                echo 'connection established'
            }
        ?>
        <ul class="header">
            Jake's Website
            <li><a href="../index.html">Home</a></li>
            <li><a href="projects.html">Projects</a></li>
        </ul>
        <table>
        </table>
    </body>
</html>