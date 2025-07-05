<?php
include 'db_con.php'; // Include your database connection file
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../Hello/ancstyle.css">
    <style>
        /* Internal CSS styles */
        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table thead th {
            background-color: #f2f2f2;
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .table tbody td {
            border: 1px solid #ddd;
            padding: 8px; /* Add padding to all sides */
        }

        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table tbody tr:hover {
            background-color: #ddd;
        }

        .table th,
        .table td {
            padding-right: 20px; /* Add space between columns */
        }
    </style>
</head>
<body>
<div class="sidebar">
        <h2>AdCraft</h2>
        <ul>
        <li><a href="../index.php" class="active">Dashboard</a></li>
            <li><a href="../users/admin.php">Users</a></li>
            <li><a href="../Inquiry/adminview.php">Services</a></li>
            <li><a href="../Careers/front.php">Careers</a></li>
            <li><a href="#">Inquiries</a></li>
            <li><a href="../Hello/display.php">Announcements</a></li>
            <li><a href="../feedback/admin.php">Feedback</a></li>
        </ul>
    </div>
    <div class="content">
        

<div class="display">
    <h2 class="createform">Contact inquiries</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Number</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Message</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>

        <?php
            $sql = "SELECT * FROM `contact`"; // corrected the quotes around 'contact'
            $result = mysqli_query($con, $sql);
            if ($result) {
                
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id']; // corrected column name to 'id'
                    $name = $row['name'];
                    $mail = $row['mail'];
                    $mobile = $row['mobile'];
                    $message = $row['message'];
                    echo '<tr>
                            <th scope="row">' . $id . '</th>
                            <td>' . $name . '</td>
                            <td>' . $mail . '</td>
                            <td>' . $mobile . '</td>
                            <td>' . $message . '</td>
                            <td>
                            <button class="update"><a href="update.php?
                            updateid='.$id.'">Update</a></button>
                            <button class="delete"><a href="delete.php?
                            deleteid='.$id.'">Delete</a></button>
                        </td>
                            </tr>';
                }
            }
        ?>

        </tbody>
    </table>
</body>
</html>
