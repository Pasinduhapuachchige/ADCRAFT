<?php

//create connection using external PHP
include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- External stylesheet -->
    <link rel="stylesheet" href="styles1.css">
    <!-- Title -->
    <title>Inquiry</title>
</head>

<!--Header-->
<body>
<section id="header-service">
    <div class="container">
     <nav>
         <div class="logo"><h1>ADCRAFT</h1></div>
         <ul class="nav-links">
             <li><a href="../Home1.php">Home</a></li>
             <li><a href="#">About</a></li>
             <li><a href="../Service/service.php">Service</a></li>
             <li><a href="../crud/add_new.php">Contact</a></li>
             <li><a href="../php/logout.php"><b>Logout</b></a></li>
         </ul>
         <div class="menu-btn"><img src="./img/menu.svg" alt=""></div>
     </nav> 
    </div>
 </section>
 </body>
<body style="background-image: url('main.png'); background-size: cover;">

<!-- Page heading -->
<h1 style="text-align:center;font-family: 'Times New Roman', Times, serif;"> Receive your Inquiry ID! </h1><br>
<h3 style="text-align: center;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">NOTE: Search your reference code. Match the code with your email, service category and description.<br>
Afterwards select your respective Inquiry IDs.</h1><br>

<!-- Container to search Reference code -->
<div class="container">

    <form method="POST">
    <center>
    <input type="text" name="searchcode"placeholder=" Search">
    <input style="font-size:12px; padding:4px 5px" type="submit" name="submit" class="btn btn-dark"value="Search">
    <div class="container my-5">
            <?php
                //isset is used to check whether the user has clicked on the specific button 
                if(isset($_POST['submit']))
                {
                    //catch the data which is sent through the search bar
                    $search=$_POST['searchcode'];

                    //read data from the database
                    $sql="SELECT * FROM inquiry_information WHERE Ref_Code='$search'";

                    //retrieve the specific records 
                    $result=$conn->query($sql);

                    //check whether there are availabe records or not
                    if($result->num_rows>0)
                    {
                        echo "<table style='width:100%'>";
                        echo "<tr style='border-style:groove'>";
                        echo "<th style='border-style:groove'>".'Inquiry_ID'."</th>"."<th style='border-style:groove'>".'Ref_Code'."</th>"."<th style='border-style:groove'>".'Email'."</th>"."<th style='border-style:groove'>".'Service_Category'."</th>"."<th style='border-style:groove'>".'Your Preference'."</th>"."<br>";
                        echo "</tr>";
                       while($row = $result->fetch_assoc())
                       {
                        echo "<tr style='border-style:groove'>";
                        echo "<td style='border-style:groove'>".$row["Inquiry_ID"]."</td>"."<td style='border-style:groove'>".$row["Ref_Code"]."</td>"."<td style='border-style:groove'>".$row["Email"]."</td>"."<td style='border-style:groove'>".$row["Service_Category"]."</td>"."<td style='border-style:groove'>".$row["User_Preference"]."</td>"."<br>";
                        echo "</tr>";
                       }
                       echo "</table>";
                    }
                    else
                    {
                        "<br>";
                        echo '<div style="background-color:#f08080" font-size:medium>Records not Found!</div>';
            
                    }
                    
                }
            ?>
            <br><br><br><br><br><br><br>
            <a href="inquiryform.php" class="btn">Back</a>
    </div>
    </center>
    </form>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<!--Footer-->
<footer>
    <ul class="footerlinks">
        
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="service.php">Services</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
    <h1 class="logo">ADCRAFT</h1>
    <p>
       @2024 AdCraft. All rights reserved. 
    </p>
</footer>
</body>

</html>