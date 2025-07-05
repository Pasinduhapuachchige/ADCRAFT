<?php 
   // Start session
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Login</title>
</head>
<body style="background-image: url('./img/jess-bailey-q10VITrVYUM-unsplash.jpg'); background-size: cover;">
     <!-- Header -->
     <h1 style="text-align: center; margin-top: 50px; margin-bottom: -50px;">ADCRAFT</h1>
     <!-- Login form container -->
     <div class="container">
        <div class="box form-box">
            <?php 
              // Include database configuration
              include("php/config.php");

              // Check if form is submitted
              if(isset($_POST['submit'])){
                // Sanitize user inputs
                $email = mysqli_real_escape_string($con,$_POST['email']);
                $password = mysqli_real_escape_string($con,$_POST['password']);

                // Check if the login is for admin
                if($email === "admin@123" && $password === "admin123") {
                    // Redirect admin to admin dashboard 
                    header("Location:Admindash/index.php");
                    exit(); // Stop further execution
                }

                // Query to check user credentials
                $result = mysqli_query($con,"SELECT * FROM users1 WHERE Email='$email' AND Password='$password' ") or die("Select Error");

                // Fetch user data
                $row = mysqli_fetch_assoc($result);

                // If user exists
                if(is_array($row) && !empty($row)){
                    // Set session variables
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['mobile'] = $row['Phone'];
                    $_SESSION['id'] = $row['Id'];
                }else{
                    // Display error message if credentials are incorrect
                    echo "<div class='message'>
                      <p>Wrong Username or Password</p>
                       </div> <br>";
                   echo "<a href='index.php'><button class='btn'>Go Back</button>";
         
                }
                // Redirect to home page if login is successful
                if(isset($_SESSION['valid'])){
                    header("Location: Home1.php");
                    exit(); // Stop further execution
                }
              }
            ?>
            <!-- Login form -->
            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email"  required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password"  required>
                </div>

                <div class="field">
                    <!-- Submit button -->
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <!-- Links -->
                <div class="links">
                    Don't have an account? <a href="register.php">Sign Up Now</a>
                </div>
            </form>
        </div>
      </div>
</body>
</html>
