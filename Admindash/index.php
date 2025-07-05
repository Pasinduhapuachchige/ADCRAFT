<?php

//include 'Hello/connect.php';
include 'count.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="Hello/ancstyle.css">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');
</style>

<body>
    <div class="sidebar">
        <h2>AdCraft</h2>
        <ul>
            <li><a href="#" class="active">Dashboard</a></li>
            <li><a href="users/admin.php">Users</a></li>
            <li><a href="inquiry/adminview.php">Services</a></li>
            <li><a href="Careers/front.php">Careers</a></li>
            <li><a href="contactus/display.php">Inquiries</a></li>
            <li><a href="Hello/display.php">Announcements</a></li>
            <li><a href="FEEDBACK/admin.php">Feedback</a></li>
        </ul>
    </div>
    <div class="content">
    <div class="logout-button">
           <button><a href="../php/logout.php" class="logout">Logout</a></button> 
    </div>
        <h2 class="createform">Welcome to Admin Dashboard</h2>
        <div class="box-container">
            <div class="box"><h3>Users</h3>  <?= getCount('users1') ?></div>
            <div class="box"><h3>Service requests </h3>  <?= getCount('inquiry_information') ?></div>
            <div class="box"><h3>Career requests</h3>  <?= getCount('applicant1') ?></div>
            <div class="box"><h3>Contact inquiries</h3><?= getCount('contact') ?> </div>
            <div class="box"><h5>Announcements</h5>  <?= getCount('announcement') ?></div>
            <div class="box"><h3>Feedbacks </h3><?= getCount('greetings') ?> </div>
           
        
        
    </div>
</body>
</html>