


<?php
require '../Hello/connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud op</title>
   <link rel="stylesheet" href="../Hello/ancstyle.css">
   <link rel="stylesheet" href="../styles.css">
   
</head>
<body>

<div class="sidebar">
        <h2>AdCraft</h2>
        <ul>
        <li><a href="../index.php" class="active">Dashboard</a></li>
            <li><a href="../users/admin.php">Users</a></li>
            <li><a href="../Inquiry/adminview.php">Services</a></li>
            <li><a href="../Careers/front.php">Careers</a></li>
            <li><a href="../contactus/display.php">Inquiries</a></li>
            <li><a href="../Hello/display.php">Announcements</a></li>
            <li><a href="#">Feedback</a></li>
        </ul>
    </div>
    <div class="content">

    <h2 class="createform">Feedback</h2>

    <br><br>
        
    <?php

function readData()
{
    global $con;
    $sql = "SELECT id, message FROM greetings";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='table'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Message</th>";
        echo "<th>Edit</th>";
        echo "<th>Delete</th>";
        echo "</tr>";
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["message"] . "</td>";
            echo "<td>";
            
            echo "<form action='update_data.php' method='POST'>";
            echo "<input type='text' name='message' value='" . $row["message"] . "'><br>";
            echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
            echo "<input class='update' type='submit' name='update' value='Update'>";
            echo "</form>";
            echo "</td>";
            
            echo "<td>";
            echo "<form action='delete_data.php' method='POST'>";
            echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
            echo "<input class='delete' type='submit' name='delete' value='Delete'>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "No results";
    }
    $con->close();
}

readData();
?>


    </div>

</body>

</html>