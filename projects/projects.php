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
            $dbOk = false;
            @$db = new mysqli('localhost', 'phpmyadmin', 'JaysonTatum0$', 'mySite');
            if ($db->connect_error) {
                echo '<div class="messages">Database Connection Error: ';
                echo $db->connect_errno . ' - ' . $db->connect_error . '</div>';
            } else {
                $dbOk = true;
            }
        ?>
        <ul class="header">
            Jake's Website
            <li><a href="../index.html">Home</a></li>
            <li><a href="projects.html">Projects</a></li>
        </ul>
        <?php
            if ($dbOk) {
                $query = 'select * from myProjects order by projectNumber';
                $result = $db->query($query);
                $numRecords = $result->num_rows;
                echo '<ul class="labs">';
                for ($i = 0; $i < $numRecords; $i++) {
                    $record = $result->fetch_assoc();
                    echo '<li>';
                    echo '<a href="' . ($record['projectLink']) . '">';
                    echo htmlspecialchars($record['projectClass']) . '-' . htmlspecialchars($record['projectTitle'])
                    echo '</a>'
                    echo '</li>'
                }
                $result->free();
                $db->close();
            }

        ?>

    </body>
</html>