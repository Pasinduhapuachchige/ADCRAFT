<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <!-- Link to CSS files -->
    <link rel="stylesheet" href="feedback.css">
    <!-- <link rel="stylesheet" href="../styles1.css"> -->
</head>
<body class="feed_body">
    <!-- Header and Navigation Section -->
    <section id="header-service">
        <div class="container">
            <nav>
                <!-- Logo -->
                <div class="logo"><h1>ADCRAFT</h1></div>
                <!-- Navigation Links -->
                <ul class="nav-links">
                    <li><a href="../Home1.php">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="../Service/service.php">Service</a></li>
                    <li><a href="../crud/add_new.php">Contact</a></li>
                    <li><a href="../php/logout.php"><b>Logout</b></a></li>
                </ul>
                <!-- Mobile Menu Button -->
                <div class="menu-btn"><img src="./img/menu.svg" alt=""></div>
            </nav>
        </div>
    </section>

    <?php
    // PHP code to handle form submission and database interaction
    include("../php/config.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST["fusername"];
        $email = $_POST["femail"];
        $message = $_POST["fmessage"];

        $sql = "INSERT INTO greetings (username, email, message) VALUES ('$user', '$email', '$message')";

        if(mysqli_query($con, $sql)){
            // Success message if feedback is submitted
        
        echo "<script>alert('Submitted successfully!!'); window.location='feedback.php';</script>";
        } else {
            // Error message if submission fails
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
    }
    ?>

    <!-- Feedback Form -->
    <form action="" method="POST">
        <fieldset class="feedback-fieldset">
            <legend class="feedback-legend">FEEDBACK</legend>
            <!-- Username input -->
            <label for="username" class="feedback-label">Username:</label><br>
            <input type="text" class="feedback-input" id="fusername" placeholder="Username" name="fusername"><br><br>
            <!-- Email input -->
            <label for="email" class="feedback-label">Email:</label><br>
            <input type="text" class="feedback-input" id="femail" placeholder="Email" name="femail"><br><br>
            <!-- Message input -->
            <label for="message" class="feedback-label">Message:</label><br>
            <textarea placeholder="Write your message..." class="feedback-textarea" name="fmessage"></textarea><br><br>
            <!-- Submit button -->
            <input type="submit" value="Submit" class="submit-btn">
        </fieldset>
    </form>

     <!-- Footer Section -->
<footer style="display: flex; flex-direction: column; align-items: center;">
    <!-- Footer Links -->
    <ul class="footerlinks">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
    </ul>

    <p>
       @2024 AdCraft. All right reserved. 
    </p>
</footer>
</body>
</html>
