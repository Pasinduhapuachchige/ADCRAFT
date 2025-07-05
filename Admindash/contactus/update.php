<?php
include 'db_con.php';

// Initialize variables
$id = 'id';
$name = 'name';
$mail = 'mail';
$mobile = 'mobile';
$message = 'message';

// Check if 'updateid' is set in the URL
if(isset($_GET['updateid'])) {
    $id = $_GET['updateid'];

    // Fetch data based on the provided ID
    $sql = "SELECT * FROM `contact` WHERE id=$id";
    $result = mysqli_query($con, $sql);
    
    // Check if the query was successful and fetch data
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $mail = $row['mail'];
        $mobile = $row['mobile'];
        $message = $row['message'];
    } else {
        echo "Error: Unable to fetch data from the database.";
    }
}

// Check if form is submitted
if(isset($_POST['submit'])){
    // Retrieve form data
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message']; 

    // Update data in the database
    $sql = "UPDATE `contact` SET name='$name', mail='$mail', mobile='$mobile', message='$message' WHERE id=$id";
    $result = mysqli_query($con, $sql);
    
    if($result){
        echo "<script>alert('Data updated successfully!!'); window.location='display.php';</script>";
    } else{
        die(mysqli_error($con));
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdCraft</title>
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../Hello/ancstyle.css">
</head>
<body>
<div class="sidebar">
        <h2>AdCraft</h2>
        <ul>
        <li><a href="../index.php" class="active">Dashboard</a></li>
            <li><a href="#">Users</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Inquiries</a></li>
            <li><a href="#">Announcements</a></li>
            <li><a href="#">Feedback</a></li>
        </ul>
    </div>
    <div class="content">
        
   



















<div class="display">
    <h2 class="createform">Annoucements</h2>
 
     <section id="contact-us" class="container">
         
    <form method="post" class="create">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control"
                    placeholder="Enter your name"
                    name="name" autocomplete="off" value="<?php
                    echo $name;?>">
    </div>
    <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control"
                    placeholder="Enter your Email"
                    name="mail" autocomplete="off" value="<?php
                    echo $mail;?>">
    </div>    
    <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" class="form-control"
                    placeholder="Enter your mobile number"
                    name="mobile" autocomplete="off" value="<?php
                    echo $mobile;?>">
    
    </div>

    <div class="form-group">
                    <label>Message</label>
                    <input type="text" class="form-control"
                    placeholder="Enter your Message"
                    name="message" autocomplete="off" value="<?php
                    echo $message;?>">
    </div> 
    
    <button type="submit"  name="submit" style="margin-left:170px;">Update</button>
             
 </form>
 
             
</body>
</html>
