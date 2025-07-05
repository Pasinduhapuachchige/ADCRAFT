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
    <title>Inquiry Delete</title>
</head>

<!--Header-->
<body>
<section id="header-service">
    <div class="container">
     <nav>
         <div class="logo"><h1>ADCRAFT</h1></div>
         <ul class="nav-links">
             <li><a href="Home1.php">Home</a></li>
             <li><a href="#">About</a></li>
             <li><a href="service.php">Service</a></li>
             <li><a href="contact.php">Contact</a></li>
             <li><a href="php/logout.php"><b>Logout</b></a></li>
         </ul>
         <div class="menu-btn"><img src="./img/menu.svg" alt=""></div>
     </nav> 
    </div>
 </section>
 </body>
<body style="background-image: url('main.png'); background-size: cover;">

<!-- Page heading -->

<h1 style="text-align:center;font-family: 'Times New Roman', Times, serif;"> DELETE INQUIRIES</h1><br>
<h3 style="text-align: center;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">- - - - DELETE YOUR INQUIRY - - - -</h1><br>

<!-- Container for the delete form -->
<div class="container">
    <div class="box form-box">

    <form method="POST" action="delete.php"><br><br>
    
    <p style="text-align:center;font-size: medium;font-family: 'Times New Roman', Times, serif;"> Provide your Inquiry ID  
    <input type="text" name="inquiryID" placeholder="Enter ID" Required><br>

    <b><p style="text-align:center;">Haven't taken your Inquiry IDs?</b>
    <a href="inquiryIDform.php"><u>Click Here</u></a><br><br>

    <p style="text-align:center; font-size: medium;font-family: 'Times New Roman', Times, serif;"> Provide your Reference Code
    <input type="text" name="inquiryCode" placeholder="Ex:011" Required><br><br> 
    
    <input type="submit" class="btn" value="DELETE"><br><br>
    <a href="inquiryform.php" class="btn">Back</a>
    </form>
    </div>
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