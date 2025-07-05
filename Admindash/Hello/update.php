<?php

include 'connect.php';

$id = $_GET['updateid'];

$sql = "select * from announcement where Announcement_id =$id";

$result = mysqli_query($con,$sql);

$row = mysqli_fetch_assoc($result);

//$id = $row['Announcement_id'];
$title = $row['Title'];
$content = $row['Content'];
$date = $row['Date'];

if(isset($_POST['submit'])){
   // $id = $_POST['announcement_id'];   //Announcement_id = '$id'
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = $_POST['date'];

    $sql = "update announcement set Title = '$title',   
    Content = '$content', Date = '$date' where Announcement_id =$id";
    $result = mysqli_query($con,$sql);

    if($result)
    {
        //echo "Updated successfully";
        echo "<script>alert('Data updated successfully!!'); window.location='display.php';</script>";
       // header('location:display.php');
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
       <li> <a href="../index.php" class="active">Dashboard</a></li>
            <li><a href="#">Users</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Inquiries</a></li>
            <li><a href="#">Announcements</a></li>
            <li><a href="#">Feedback</a></li>
        </ul>
</div>
<div class="content">
    <h2 class="createform">Update Announcement</h2>
    <form class="create"  method="POST">
        
        <!-- <label for="announcement_id">Announcement ID:</label><br>
        <input type="text" id="announcement_id" name="announcement_id" value= <?php //echo $id;?>><br><br>
 -->

        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value=<?php
         echo $title;?>><br><br>

        <label for="content">Content:</label><br>
        <textarea height="50" length="50" id="content" name="content" value=<?php
         echo $content;?> > </textarea><br><br>

        <label for="date">Date:</label><br>
        <input type="date" id="date" name="date" value=<?php
         echo $date;?>><br><br>

        <input type="submit" value="Update" name="submit">
    </form>
</div>
</body>
</html>