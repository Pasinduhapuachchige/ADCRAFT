<?php 
   // Start session
   session_start();
?>
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
    <section id="header" style="background-image: url(./img/jess-bailey-q10VITrVYUM-unsplash.jpg);">
       <div class="container">
       <?php 
            // Include database configuration
            include("php/config.php");
            
            // Fetch user data based on session ID
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users1 WHERE Id=$id");

            // Display user information
            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Mobile = $result['Phone'];
                $res_id = $result['Id'];
            }
       ?>
        <!-- Navigation Bar -->
        <nav>
            <div class="logo"><h1>ADCRAFT</h1></div>
           
            <ul class="nav-links">
                <!-- Navigation Links -->
                <li><a href="Home1.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="Service/service.php">Service</a></li>
                <li><a href="CRUD/add_new.php">Contact</a></li>
                <li><a href="carrer/index1.php">Career</a></li>
                <!-- Change Profile link -->
                <?php echo "<li><a href='edit.php?Id=$res_id'><u>Change Profile</u></a></li>"; ?>
                <!-- Logout link -->
                <li><a href="php/logout.php"><b>Logout</b></a></li>
            </ul>
            <!-- Mobile Menu Button -->
            <div class="menu-btn"><img src="./img/menu.svg" alt=""></div>
        </nav>

        <!-- Header Content -->
        <div class="header-content">
            <h1 style=" font-size: 400%; color:#04555b;">ADCRAFT</h1>
            <p style=" font-size: 200%;">Hello <b><?php echo $res_Uname ?></b>, Welcome</p>
            <button class="primary-btn"><a href="works.php">OUR WORKS</a></button>
        </div>
       </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="container">
        <!-- Service 1 -->
        <div class="service">
            <a href="./Service/banner.php"><img src="./img/java.jpg" alt="" style="border-radius: 20px;"></a>
            <h1>Banner Designs</h1>
            <p>Want to reach out to your ideal customers with catchy banner designs? Come and join with us!
            </p>
        </div>
        <!-- Service 2 -->
        <div class="service">
            <a href="./Service/ads.php"><img src="./img/HD-wallpaper-full-stack-developer-hacker-programming-javascript-python-coder-software-coding-computer-science-css-web-design-html-linux-html5-programmer-laptop-tech-php-developer-thumbnail.jpg" alt="" style="border-radius: 20px;"></a>
            <h1>Advertisement Designs</h1>
            <p>want to drive meaningful interactions with your audience through advertisements? Join with us!
            </p>
        </div>
        <!-- Service 3 -->
        <div class="service">
            <a href="./Service/socialmedia.php"><img src="./img/mic.avif" alt="" style="border-radius: 20px;"></a>
            <h1>Social Media Advertising</h1>
            <p>Want to build a strong brand presence on social media platforms and increase awareness among your target audience? <br>Our platform is the best!
            </p>
        </div>
    </section>


<!-- Feedback Section -->
<div style="text-align: center; margin-top: 60px; margin-bottom: 40px;">
    <h1 style="font-size: 36px; color: #333;">Feedbacks</h1>
</div>
    
<?php
// Including the configuration file
require 'php/config.php';

// Function to read and display feedback data
function readData()
{
    global $con;
    $sql = "SELECT id, email, message FROM greetings ORDER BY id DESC LIMIT 4"; // Fetching last 4 records
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        echo "<div style='display: flex; justify-content: center;'>";
        while ($row = $result->fetch_assoc()) {
            echo "<div style='margin: 20px; background-color: #f2f2f2; border-radius: 10px; padding: 20px; width: 300px; height: auto; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);'>";
            echo "<p style='font-size: 18px; color: #333;'><b>Email:</b> " . $row["email"] . "</p>";
            echo "<p style='font-size: 16px; color: #666;'><b>Feedback:</b> " . $row["message"] . "</p>";
            echo "</div>";
        }
        echo "</div>";
    } else {
        echo "<p style='text-align: center; font-size: 18px; color: #666;'>No feedback available</p>";
    }
    $con->close();
}

// Calling the function to display feedback data
readData();
?>


<br>
<br>

<!-- Announcement Section -->
<div class="anc" style="margin-top: 40px; text-align: center;">
    <h2 style="margin-bottom: 30px; font-size: 36px; color: #333;">Announcements</h2>
    <?php
    // Including the database connection file
    include 'Admindash/Hello/connect.php';

    ?>

    <!-- Table for displaying announcements -->
    <table class="table" style="margin: 0 auto; width: 95%; background-color: #f9f9f9; border-collapse: collapse; border-spacing: 0; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <thead>
            <tr style="background-color: #4aa8a3; color: #fff;">
                <th style="padding: 15px; border: 1px solid #ddd;">Title</th>
                <th style="padding: 15px; border: 1px solid #ddd;">Content</th>
                <th style="padding: 15px; border: 1px solid #ddd;">Date</th>
            </tr>
        </thead>
        <tbody>

            <?php
            // Fetching and displaying announcements
            $sql = "SELECT * FROM announcement ORDER BY Announcement_id DESC LIMIT 4";
            $result = mysqli_query($con, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $title = $row['Title'];
                    $content = $row['Content'];
                    $date = $row['Date'];

                    echo '<tr style="background-color: #fff; color: #333; border: 1px solid #ddd;">';
                    echo '<td style="padding: 15px; border: 1px solid #ddd;">' . $title . '</td>';
                    echo '<td style="padding: 15px; border: 1px solid #ddd;">' . $content . '</td>';
                    echo '<td style="padding: 15px; border: 1px solid #ddd;">' . $date . '</td>';
                    echo '</tr>';
                }
            } else {
                echo "<tr><td colspan='3' style='padding: 15px; border: 1px solid #ddd;'>No announcements found</td></tr>";
            }
            ?>
        </tbody>

    </table>
</div>



<!-- About Section -->
<section id="about" class="container">
    <div class="about-content">
        <h1>About Us</h1>
        <p> Where strategy meets creativity. Our online advertising agency specializes in tailored digital marketing solutions, from SEO to social media management. With data-driven insights and industry expertise, 
            we amplify your brand's online presence for maximum impact.
             Let's collaborate and craft your digital success story today.
        </p>
    </div>
    <div class="about-img">
        <img src="./img/Depositphotos_114292702_l-2015.jpg" alt="" style="width: 50%; height:85%; margin-left: 50%; border-radius:20px;">
    </div>
</section>

<!-- Talk to Us Section -->
<section id="talk-to-us" style="background-image: url(./img/damian-zaleski-RYyr-k3Ysqg-unsplash.jpg);">
    <div class="talk-to-us-content">
        <h1>TALK TO US</h1>
        <p>Have you any questions? We are always open to talk about
            your business.
        </p>
        <button class="primary-btn"><a href="crud/add_new.php">GET IN TOUCH</a></button>
    </div>
</section>

<!-- Footer Section -->
<footer>
    <ul class="footerlinks">
        <li><a href="#">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="Home_Feedback/feedback.php">Feedback</a></li>

    </ul>
    <h1 class="logo">ADCRAFT</h1>
    <p>
       @2024 AdCraft. All rights reserved. 
    </p>
</footer>

<!-- JavaScript for Smooth Scrolling -->
<script>
    // Smooth scrolling when clicking on About tab
    document.addEventListener('DOMContentLoaded', function () {
        var aboutTab = document.querySelector('a[href="#about"]');
        if (aboutTab) {
            aboutTab.addEventListener('click', function (e) {
                e.preventDefault();
                var aboutSection = document.getElementById('about');
                if (aboutSection) {
                    aboutSection.scrollIntoView({ behavior: 'smooth' });
                }
            });
        }
    });
</script>

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
