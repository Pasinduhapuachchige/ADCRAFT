<?php

include 'connect.php';

if(isset($_POST['submit'])){
   // $id = $_POST['announcement_id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = $_POST['date'];

    $sql = "insert into announcement (Title,Content,Date)  
    values ('$title','$content','$date')";  //'$id'

    $result = mysqli_query($con,$sql);

    if($result)
    {
        //echo "Data inserted successfully";
        echo "<script>alert('Data added successfully!!'); window.location='display.php';</script>";
    }
    else{
        die(mysqli_error($con));
    }

}



?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ancstyle.css">
    <link rel="stylesheet" href="../styles.css">
    <title>Create Announcement</title>
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


    <h2 class="createform">Create Announcement</h2>
    <form class="create"  method="POST">
          
    
        <!-- <label for="announcement_id">Announcement ID:</label><br>
        <input type="text" id="announcement_id" name="announcement_id"><br><br>  -->

        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br><br>

        <label for="content">Content:</label><br>
        <textarea id="content" name="content" rows="4" cols="50"></textarea><br><br>

        <label for="date">Date:</label><br>
        <input type="date" id="date" name="date"><br><br>

        <input type="submit" value="Submit" name="submit">
    </form>

</div>
</body>
</html>