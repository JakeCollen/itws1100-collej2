<!DOCTYPE html>


<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My Projects Home Page</title>
        <link href="../../resources/header.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="../../resources/labs_list.js"></script>
    </head>

    <body>
        <?php
            $connOk = false;
            @$conn = new mysqli('localhost', 'phpmyadmin', 'JaysonTatum0$', 'mySite');
            if ($conn->connect_error) {
                echo '<div>Database Connection Error: ';
                echo $conn->connect_errno . ' - ' . $conn->connect_error . '</div>';
            } else {
                $connOk = true;
            }
        ?>
        <ul class="header">
            Jake's Website
            <li><a href="../index.html">Home</a></li>
            <li><a href="../projects.html">Projects</a></li>
        </ul>
        <?php
            if ($connOk) {
                $query = 'select * from myLabs order by labNumber';
                $result = $conn->query($query);
                $numRecords = $result->num_rows;
                echo '<ul class="labs">';
                for ($i = 0; $i < $numRecords; $i++) {
                    $record = $result->fetch_assoc();
                    echo '<li>';
                    echo '<a href="' . ($record['labLink']) . '">';
                    echo 'Lab' . htmlspecialchars($record['labNumber']) . '-' . htmlspecialchars($record['labTitle']);
                    echo '</a>';
                    echo '</li>';
                }
                $result->free();
                $conn->close();
            }

        ?>
    </body>
</html>