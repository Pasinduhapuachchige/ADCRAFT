<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdCraft</title>
    <link rel="stylesheet" href="styles1.css">
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
                <li><a href="#">Service</a></li>
                <li><a href="../crud/add_new.php">Contact</a></li>
                <li><a href="php/logout.php"><b>Logout</b></a></li>
            </ul>
            <div class="menu-btn"><img src="./img/menu.svg" alt=""></div>
        </nav>  
       </div>
    </section>

    <section id="banner"style="background-image: url(./mainbaner.jpg);">
        <div class="container" >
            <h2>Engage. Connect. Grow.</h2>
            <p>Unlock the full potential of your brand with our Social Media Marketing services.</p>
        </div>
    </section>

    <section id="features">
        <div class="container">
            <div class="feature">
                <a href="banner.php"><img src="target-audience.jpg" alt="Banner Designs" >
                <h3>Banner Designs</h3>
                <p>Want to reach out to your ideal customers with catchy banner designs? Come and join with us!</p>
            </div>
            <div class="feature">
                <a href="socialmedia.php"><img src="brand.png" alt="Socail Media Advertising" >
                <h3>Socail Media Advertising</h3>
                <p>Want to build a strong brand presence on social media platforms and increase awareness among your target audience? <br>Our platform is the best!</p>
            </div>
            <div class="feature">
                <a href="ads.php"><img src="engagement.png" alt="Advertisement Designs">
                <h3>Advertisement Designs</h3>
                <p>want to drive meaningful interactions with your audience through advertisements? Join with us!</p>
            </div>
        </div>
    </section>

    <section id="cta">
        <div class="container">
            <h2>Hurry! Drop your inquiries now! </h2>
            <a href="inquiryform.php" class="primary-btn">Inquiry</a>
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