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
    
   
    <section id="banner" style="background-image: url('bannerimage.jpg');">
        <div class="container">
            <h2 style="font-size:40px;">Banner Designs</h2>
            <p>The BEST for Designing Banners at your own Suggestions!<br>
            Designing a captivating banner is an art that combines creativity, strategy, and visual 
            appeal to effectively communicate a message and capture attention.<br>
            Whether it's for digital platforms, events, promotions, or advertisements, 
            a well-designed banner can make a significant impact and leave a lasting impression 
            on your audience.<br>
            An effective banner design begins with a clear understanding of its 
            purpose and target audience. Whether you're aiming to promote a product, announce an event, or convey a message, 
            defining your objectives is crucial in guiding the design process.<br></p>



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