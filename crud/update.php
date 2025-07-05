<?php
include 'db_con.php';
$id = $_GET['updateid'];
$sql="select * from `contact` where id=$id";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$mail=$row['mail'];
$mobile=$row['mobile'];
$message=$row['massage'];

if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $mobile = $_POST['mobile'];
    $massage = $_POST['message']; 

    
    $sql = "UPDATE `contact` SET name='$name', mail='$mail', mobile='$mobile', massage='$message' WHERE id=$id";

    $result = mysqli_query($con, $sql);
    if($result){
        echo "Data updated successfully";
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
</head>
<body>
    <section id="contact-header">
        <div class="container">
         <nav>
             <div class="logo"><h1>ADCRAFT</h1></div>
             <ul class="nav-links">
                 <li><a href="./index.html">Home</a></li>
                 <li><a href="#">About</a></li>
                 <li><a href="service.html">Service</a></li>
                 <li><a href="#">Contact</a></li>
                 <li><a href="loging.html"><b>Login</b></a></li>
             </ul>
             <div class="menu-btn"><img src="./img/menu.svg" alt=""></div>
         </nav>
 
         <div class="header-content">
             <h1>CONTACT US</h1>
         </div>
        </div>
     </section>
 
     <section id="contact-us" class="container">
         
    <form method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control"
                    placeholder="Enter your name"
                    name="name" autocomplete="off" value=<?php
                    echo $name;?>
    </div>
    <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control"
                    placeholder="Enter your Email"
                    name="mail" autocomplete="off" value=<?php
                    echo $mail;?>>
    </div>    
    <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" class="form-control"
                    placeholder="Enter your mobile number"
                    name="mobile" autocomplete="off" value=<?php
                    echo $mobile;?>
    
    </div>
    <div class="form-group">
                    <label>Massage</label>
                    <input type="text" class="form-control"
                    placeholder="Enter your Massage"
                    name="message" autocomplete="off" value=<?php
                    echo $message;?>
    </div> 
    
    <button type="submit" class="btn
    btn-primary" name="submit">Update</button>
             



         </form>
 
         <div class="address">
             <h1>TALK TO US</h1>
 
             <div class="detailsWrapper">
                 <div class="detail">
                     <img src="./img/email.png" alt="">
                     <div class="text">
                         <h6>EMAIL</h6>
                         <p>adcraft@gmail.com</p>
                     </div>
                 </div>
                 <div class="detail">
                     <img src="./img/phone.png" alt="">
                     <div class="text">
                         <h6>PHONE NUMBER</h6>
                         <p>0760579866/077453234</p>
                     </div>
                 </div>
                 <div class="detail">
                     <img src="./img/location.png" alt="">
                     <div class="text">
                         <h6>ADDRESS</h6>
                         <p>806/45B,Colombo 07</p>
                     </div>
                 </div>
             </div>
 
             <div class="followUsWrapper">
                 <h3>FOLLOW US</h3>
                 <ul class="socialLinks">
                     <li><a href=""><img src="./img/facebook.png" alt=""></a></li>
                     <li><a href=""><img src="./img/linkedin.png" alt=""></a></li>
                     <li><a href=""><img src="./img/video.png" alt=""></a></li>
                 </ul>
             </div>
         </div>
     </section>
    
     <footer>
        <ul class="footerlinks">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <h1 class="logo">ADCRAFT</h1>
        <p>
           @2024 AdCraft. All right reserved. 
        </p>
    </footer>

    <script>
        const menuBtn=document.querySelector('.menu-btn')
        const navLinks=document.querySelector('.nav-links')

        menuBtn.addEventListener('click', function(){
            navLinks.classList.toggle('active')
        })
    </script>
</body>
</html>