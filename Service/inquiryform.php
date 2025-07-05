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
    <title>Inquiry Form</title>
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

<h1 style="text-align:center;font-family: 'Times New Roman', Times, serif;"> INQUIRY FORM</h1><br>

<!-- Container for the form -->
<div class="container1">
    <div class="box form-box">     
           
<!--Creation of the Inquiry Form-->

    <h3 style="text-align: center;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">FILL THE FORM BELOW FOR INQUIRIES</h1><br>
    
    <form method="POST" action="create.php">
    <center>
    <b><p style="font-size:14px;">NOTE: Make sure you enter UNIQUE Reference Codes EACH TIME you make an Inquiry.<br> It will be needed for further updates and in case of deleting an Inquiry!<br>
    PLEASE SCREENSHOT YOUR REFERENCE CODES SEPERATELY WITH THE SERVICE & DESCRIPTION YOU HAVE INQUIRED!<br></p></b><br>
    
    <p style="font-size: medium;font-family: 'Times New Roman', Times, serif;">Create your Reference Code <br>
    <input type="text" name="inquiryCode" placeholder="Ex:011"><br><br>

    <p style="font-size: medium;font-family: 'Times New Roman', Times, serif;">Enter your Email<br>
    <input type="text" name="inquiryEmail" placeholder="Enter Email"><br><br>

    <p style="font-size: medium;font-family: 'Times New Roman', Times, serif;">Service Category<br>
    <select name="inquiryService">
        <!--to select default option'selected hidden' is used-->
        <option selected hidden>Choose Here</option>
        <option value="Banner Designs">Banner Designs</option>
        <option value="Social Media Advertising">Social Media Advertising</option>
        <option value="Advertisement Designs">Advertisement Designs</option>
    </select>
    <br><br>
    <p style="font-size: medium;font-family: 'Times New Roman', Times, serif;">Describe your Preferences<br>
    <textarea id="" name="inquiryMessage" rows="10" cols="50" placeholder="Type here"></textarea>
    <br><br>
    <input type="submit" class="btn" value="SEND">  <input type="reset" class="btn" value="RESET">
    </form>
    </center>
    </div>
</div>

<br><br>

<section id="cta">
    <div class="container">
    <b><p style="text-align:center;">Receive Inquiry IDs after placing an Inquiry</b><br>
    <a href="inquiryIDform.php"><input type="submit" class="btn" value="GET YOUR INQUIRY IDs"></a><br><br><br>

    <b><p style="text-align:center;">Click to Update your Inquiry!</b>
    <a href="updateform.php"><input type="submit" class="btn" value="Update Here"></a><br><br>
    <b><p style="text-align:center;">Click to Delete your Inquiry!</b>
    <a href="deleteform.php"><input type="submit" class="btn" value="Delete Here"></a>
    </div>
</section>

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