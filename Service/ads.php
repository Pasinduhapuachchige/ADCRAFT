<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdCraft</title>
    <link rel="stylesheet" href="styles1.css">
<style>

</style>
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
            <li><a href="service.php">Service</a></li>
            <li><a href="../crud/add_new.php">Contact</a></li>
            <li><a href="../php/logout.php"><b>Logout</b></a></li>
            </ul>
        </nav>  
       </div>
    </section>
    
    <body >
    


    <section id="banner"style="background-image: url('socialmediaimage.jpg');">
        <div class="container">
            <h2> Advertisement Designs</h2>
            <p>Creating captivating advertisement designs is crucial for catching the attention of your audience and conveying your message effectively. Whether you're promoting a product, service, event, or cause, the design plays a pivotal role in engaging potential customers or supporters. From bold graphics to clever copywriting, every element of your advertisement should work together to leave a lasting impression and inspire action. Let's explore some strategies and tips to craft compelling advertisement designs that resonate with your target audience.</p>
            <p><center>-ADCRAFT-</center></p>
        </div>
    </section>




    <section id="cta">
        <div class="container">
            <h2>Wanna inquire a design?</h2>
            <a href="inquiryform.php" class="primary-btn">Click Here</a>
        </div>
    </section>

 
    <footer>
        <ul class="footerlinks">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="service.php">Services</a></li>
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