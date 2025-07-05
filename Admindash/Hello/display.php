<?php

include 'connect.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud op</title>
   <link rel="stylesheet" href="ancstyle.css">
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
            <li><a href="#">Announcements</a></li>
            <li><a href="../feedback/admin.php">Feedback</a></li>
        </ul>
    </div>
    <div class="content">
        
<div class="display">
    <h2 class="createform">Annoucements</h2>

  <div class="container">
      <button class="make"> <a href="anc.php"> Make announcement </a></button>
    
  </div>
  <br>
      <br>

  <table class="table">
    <thead>
      <tr>
         <th>Announcement_id</th> 
        <th>Title</th>
        <th>Content</th>
        <th>Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>


    <?php

    $sql = "select * from announcement";

    $result = mysqli_query($con,$sql);

    if($result)
    {
    
      while($row = mysqli_fetch_assoc($result)){
          $id = $row['Announcement_id'];
          $title = $row['Title'];
          $content = $row['Content'];
          $date = $row['Date'];
          echo '<tr>
          <th scope="row">'.$id.'</th>
          <td>'.$title.'</td>
          <td>'.$content.'</td>
          <td>'.$date.'</td>
          
          <td>
          <button class="update"><a href="update.php?updateid=' .$id. ' ">Update</a></button>
          <button class="delete"><a href="delete.php?deleteid=' .$id. ' ">Delete</a></button>
          </td>

        </tr>';


      }
    }

  ?>
      
  
    </tbody>
      
  </table>


</div>

    </div>
    
</body>
</html>