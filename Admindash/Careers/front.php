<?php

include 'config.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Hello/ancstyle.css">
    <link rel="stylesheet" href="../styles.css">

    <title>Document</title>
</head>
<body>

<div class="sidebar">
        <h2>AdCraft</h2>
        <ul>
        <li><a href="../index.php" class="active">Dashboard</a></li>
            <li><a href="../users/admin.php">Users</a></li>
            <li><a href="../Inquiry/adminview.php">Services</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="../contactus/display.php">Inquiries</a></li>
            <li><a href="../Hello/display.php">Announcements</a></li>
            <li><a href="../feedback/admin.php">Feedback</a></li>
        </ul>
    </div>
<div class="content">
        
    <div class="display">
    <h2 class="createform">Career requests</h2>

 
    
<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>E-mail</th>
        <th>Password</th>
        <th>Job Position</th>
        <th>Mobile Number</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>


 <?php

$sql = "select * from applicant1";

$result = mysqli_query($con,$sql);

if($result)
{

  while($row = mysqli_fetch_assoc($result)){
      $id = $row['Id'];
      $fname = $row['First Name'];
      $lname = $row['Last Name'];
      $mail = $row['E-mail'];
      $password = $row['Password'];
      $job = $row['Job Position'];
      $mobile = $row['Mobile Number'];

      echo '<tr>
      <th >'.$id.'</th>
      <td>'.$fname.'</td>
      <td>'.$lname.'</td>
      <td>'.$mail.'</td>
      <td>'.$password.'</td>
      <td>'.$job.'</td>
      <td>'.$mobile.'</td>
      

      
      <td>
      
      <button class="delete"><a href="delete.php?deleteid=' .$id. ' ">Delete</a></button>
      </td>

    </tr>';


  }
}

?>


    </tbody>

</table>

</body>
  