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