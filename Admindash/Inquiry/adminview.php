
<?php

session_start();

//Database connection
require 'config.php'; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   <link rel="stylesheet" href="../styles.css">
   <link rel="stylesheet" href="../Hello/ancstyle.css">
    <title>Document</title>
</head>
<body>
    



<div class="sidebar">
        <h2>AdCraft</h2>
        <ul>
        <li><a href="../index.php" class="active">Dashboard</a></li>
            <li><a href="../users/admin.php">Users</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="../Careers/front.php">Careers</a></li>
            <li><a href="../contactus/display.php">Inquiries</a></li>
            <li><a href="../Hello/display.php">Announcements</a></li>
            <li><a href="../feedback/admin.php">Feedback</a></li>
        </ul>
    </div>
    <div class="content">

    <h2 class="createform">Service requests</h2>



    <?php

// Read data from the database
$sql = "SELECT * FROM inquiry_information";

// Execute the query
$result = $conn->query($sql);

// Check if there are rows in the result
if ($result->num_rows > 0) {
    echo "<table class='table'>";
    echo "<tr>";
    echo "<th>Inquiry ID</th>";
    echo "<th>Ref Code</th>";
    echo "<th>Email</th>";
    echo "<th>Service Category</th>";
    echo "<th>Your Preference</th>";
    echo "<th>Action</th>";
    echo "</tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Inquiry_ID"] . "</td>";
        echo "<td>" . $row["Ref_Code"] . "</td>";
        echo "<td>" . $row["Email"] . "</td>";
        echo "<td>" . $row["Service_Category"] . "</td>";
        echo "<td>" . $row["User_Preference"] . "</td>";
        echo "<td>";
        echo "<form action='inquirydelete.php' method='POST'>";
        echo "<input type='hidden' name='id' value='" . $row["Inquiry_ID"] . "'>";
        echo "<input class='delete' type='submit' name='delete' value='Delete'>";
        echo "</form>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No results";
}

// Close DB connection
$conn->close();

?>


    </div>

</body>

</html>