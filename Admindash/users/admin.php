




<?php
require '../Hello/connect.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud op</title>
   
   <link rel="stylesheet" href="../styles.css">
   <link rel="stylesheet" href="../Hello/ancstyle.css">
   
</head>
<body>

<div class="sidebar">
        <h2>AdCraft</h2>
        <ul>
        <li><a href="../index.php" class="active">Dashboard</a></li>
            <li><a href="/index.php">Users</a></li>
            <li><a href="../Inquiry/adminview.php">Services</a></li>
            <li><a href="../Careers/front.php">Careers</a></li>
            <li><a href="../contactus/display.php">Inquiries</a></li>
            <li><a href="../Hello/display.php">Announcements</a></li>
            <li><a href="../feedback/admin.php">Feedback</a></li>
        </ul>
    </div>
    <div class="content">

    <h2 class="createform">USERS</h2>

    <br><br>



<?php



include '../Hello/connect.php';


function readData1()
{
    global $con;
    $sql = "SELECT id, Username, Email, Phone, Password FROM users1";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='table'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>User Name</th>";
        echo "<th>Email</th>";
        echo "<th>Phone</th>";
        echo "<th>Password</th>";
        echo "<th>Edit</th>";
        echo "<th>Delete</th>";
        echo "</tr>";
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["Username"] . "</td>";
            echo "<td>" . $row["Email"] . "</td>";
            echo "<td>" . $row["Phone"] . "</td>";
            echo "<td>" . $row["Password"] . "</td>";
            echo "<td>";

            echo "<form action='update_user_data.php' method='POST'>";
            echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
            echo "Name : <input type='text' name='username' value='" . $row["Username"] . "'><br>";
            echo "Email : <input type='text' name='email' value='" . $row["Email"] . "'><br>";
            echo "Phone : <input type='text' name='phone' value='" . $row["Phone"] . "'><br>";
            echo "<input class='update' type='submit' name='update1' value='Update'>";
            echo "</form>";

            echo "</td>";
            echo "<td>";
            echo "<form action='delete_user_data.php' method='POST'>";
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

readData1();
?>


</body>
</html>