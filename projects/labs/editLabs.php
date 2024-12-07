<?php
    $dbOk = false;
    @$db = new mysqli('localhost', 'phpmyadmin', 'JaysonTatum0$', 'mySite');
    if ($db->connect_error) {
        echo '<div>Database Connection Error: ';
        echo $db->connect_errno . ' - ' . $db->connect_error . '</div>';
    } else {
        $dbOk = true;
    }
        ?>

<?php
include('quiz3/resources/doc.php');
?>

<title>Jake's Website</title>

<?php
include('quiz3/resources/header2.php');
?>

Jake's Website
<li><a href="index.php">Home</a></li>
<li><a href="projects/projects.html">Projects</a></li>
<?php echo $_SESSION['status'] ?>
<li>Welcome, <?php echo $_SESSION['username']; ?></li>

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
        echo '</ul>';
        }
        $result->free();
        $conn->close();
    }

?>

<?php
include('quiz/resources/closing.php');
?>