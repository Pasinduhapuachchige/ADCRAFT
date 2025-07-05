<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdCraft</title>
    <link rel="stylesheet" href="styles1.css">
</head>
<body>
    <!-- Header Section -->
    <section id="header">
       <div class="container">
     
        <!-- Navigation Bar -->
        <nav>
            <div class="logo"><h1>ADCRAFT</h1></div>
           
            <ul class="nav-links">
                <!-- Navigation Links -->
                <li><a href="Home1.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="service.php">Service</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="#">Career</a></li>
                <!-- Change Profile link -->
                <?php echo "<li><a href='edit.php?Id='><u>Change Profile</u></a></li>"; ?>
                <!-- Logout link -->
                <li><a href="php/logout.php"><b>Logout</b></a></li>
            </ul>
            <!-- Mobile Menu Button -->
            <div class="menu-btn"><img src="./img/menu.svg" alt=""></div>
        </nav>

        <!-- Header Content -->
        <div class="header-content">
            <h1>ADCRAFT</h1>
            <p>Hello <b><?php echo $res_Uname?></b>, Welcome</p>
            <button class="primary-btn">EXPLORE</button>
        </div>
       </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="container">
        <!-- Service 1 -->
        <div class="service">
            <img src="service-1.png" alt="">
            <h1>Web Design</h1>
            <p>Custom web design for small websites, we help you
                capture new audience and increase your sales.
            </p>
        </div>
        <!-- Service 2 -->
        <div class="service">
            <img src="service-2.png" alt="">
            <h1>Graphic Design</h1>
            <p>Custom web design for small websites, we help you
                capture new audience and increase your sales.
            </p>
        </div>
        <!-- Service 3 -->
        <div class="service">
            <img src="service-3.png" alt="">
            <h1>Content Creation</h1>
            <p>Custom web design for small websites, we help you
                capture new audience and increase your sales.
            </p>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="container">
        <div class="about-content">
            <h1>About Us</h1>
            <p>I made it so it is super easy to update and so that it flows perfectly
                with my tutorials. Lots of love and hundreds of hours went into making
                it. I hope you love it as much as I do. I wish you the best of luck
                with your business, enjoy the adventure.
            </p>
        </div>
        <div class="about-img">
            <img src="./img/about.png" alt="">
        </div>
    </section>

    <!-- Talk to Us Section -->
    <section id="talk-to-us">
        <div class="talk-to-us-content">
            <h1>TALK TO US</h1>
            <p>Have you any questions? We are always open to talk about
                your business.
            </p>
            <button class="primary-btn">GET IN TOUCH</button>
        </div>
    </section>

    <!-- Footer Section -->
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

    <!-- JavaScript for Mobile Menu -->
    <script>
        const menuBtn=document.querySelector('.menu-btn')
        const navLinks=document.querySelector('.nav-links')

        menuBtn.addEventListener('click', function(){
            navLinks.classList.toggle('active')
        })
    </script>
</body>
</html>