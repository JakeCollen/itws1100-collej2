<!DOCTYPE html>

<?php 
    session_start();
	if (!isset($_SESSION['userId'])) {
		$_SESSION['status'] = '<li><a href="../../quiz3/resources/login.php">Login</a></li>';
		header('location: ../../quiz3/resources/login.php');
	}
    if (!isset($_SESSION['userType'])) {
		$_SESSION['userType'] = '';
	}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Projects Home Page</title>
    <link href="../../resources/header.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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

    $havePost = isset($_POST["save"]);
    $errors = '';
    if ($havePost) {
        echo 'have post';
        $labTitle = htmlspecialchars(trim($_POST["labTitle"]));
        $labLink = htmlspecialchars(trim($_POST["labLink"]));

        if ($labTitle == '') {
            $errors .= '<li>Lab title cannot be blank</li>';
        }
        if ($labLink == '') {
            $errors .= '<li>Lab Link cannot be blank</li>';
        }

        if ($errors != '') {
            echo '<div class="messages"><h4>Please correct the following errors:</h4><ul>';
            echo $errors;
            echo '</ul></div>';
            echo '<script type="text/javascript">';
            echo '  $(document).ready(function() {';
            echo '    $("' . $focusId . '").focus();';
            echo '  });';
            echo '</script>';
        } else {
            if ($connOk) {
                echo 'have conn';
                $insQuery = "insert into myLabs (`labTitle`, `labLink`) values(?,?)";
                $statement->bind_param("ss", $labTitle, $labLink);
                $statement->execute();
                echo '<div class="messages"><h4>Success: ' . $statement->affected_rows . ' lab added to database.</h4>';
                echo $labTitle . ' ' . $labLink;     
                $statement->close();
            }
        }
    }
?>
<ul class="header">
    Jake's Website
    <li><a href="../index.html">Home</a></li>
    <li><a href="../projects.html">Projects</a></li>
    <?php echo $_SESSION['status'] ?>
    <?php echo $_SESSION['userType'] ?>
</ul>
<ul class="labs">
<?php
    if ($connOk) {
        $query = 'select * from myLabs order by labNumber';
        $result = $conn->query($query);
        $numRecords = $result->num_rows;
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
</ul>
<form id="addForm" name="addForm" action="editLabs.php" method="post" onsubmit="return validate(this);">
   <fieldset>
      <div class="formData">

         <label class="field" for="labTitle">Lab Title:</label>
         <div class="value"><input type="text" size="60" value="<?php if ($havePost && $errors != '') {
                                                                     echo $labTitle;
                                                                  } ?>" name="labTitle" id="labTitle" /></div>

         <label class="field" for="labLink">Lab Link:</label>
         <div class="value"><input type="text" size="60" value="<?php if ($havePost && $errors != '') {
                                                                     echo $labLink;
                                                                  } ?>" name="labLink" id="labLink" /></div>
         <input type="submit" value="save" id="save" name="Submit" />
      </div>
   </fieldset>
</form>
</body>
</html>