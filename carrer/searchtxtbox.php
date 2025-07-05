<?php
require 'config.php';

if (isset($_POST['search'])) {
    $id = $_POST['id'];

    $query = "SELECT * FROM applicant1 WHERE Id=?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <center>
            <h1>Update Data with NIC</h1>
            <form method="post" action="" class="update-form" style="margin-left: 20px;">
                <input type="hidden" name="id" value="<?php echo $row['Id'] ?>">
                <input type="text" name="firstname" value="<?php echo $row['First Name'] ?>" placeholder="First name">
                <input type="text" name="lastname" value="<?php echo $row['Last Name'] ?>" placeholder="Last name">
                <input type="text" name="email" value="<?php echo $row['E-mail'] ?>" placeholder="Email">
                <input type="text" name="password" value="<?php echo $row['Password'] ?>" placeholder="Password">
                <input type="text" name="jobposition" value="<?php echo $row['Job Position'] ?>" placeholder="Job position">
                <input type="text" name="mobile" value="<?php echo $row['Mobile Number'] ?>" placeholder="Mobile number">
                <input type="submit" name="update" value="Update Data" class="submit-btn">
            </form>
        </center>
        <?php
    }
}
?>

<?php
// If the form for updating data has been submitted
if (isset($_POST['update'])) {
    // Retrieving data from the form
    $id = $_POST["id"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $jobposition = $_POST["jobposition"];
    $mobile = $_POST["mobile"];

    // Constructing the SQL query to update the record in the database
    $query = "UPDATE applicant1 SET `First Name`='$firstname', `Last Name`='$lastname', `E-mail`='$email', `Password`='$password', `Job Position`='$jobposition', `Mobile Number`='$mobile' WHERE Id=$id";
    
    // Executing the SQL query
    $result = mysqli_query($con, $query);

    // Checking if the update was successful
    if ($result) {
        echo "<script>alert('Data Updated successfully!!'); window.location='index1.php';</script>";
    } else {
        echo '<script> alert("Data Not Updated") </script>';
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Search data and update it</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .update-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .update-form input[type="text"] {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .update-form input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .update-form input[type="submit"]:hover {
            background-color: #0056b3;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
<center>
    <h1>Search Data With NIC</h1>
    <form method="POST" action="" class="update-form" style="margin-left: 20px;">
        <input type="text" name="id"  placeholder="Enter your NIC Number">
        <input type="submit" name="search" value="Search Data">
    </form>
</center>
</body>
</html>
