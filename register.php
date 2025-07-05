<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- External stylesheet -->
    <link rel="stylesheet" href="style/style.css">
    <!-- Title -->
    <title>Register</title>
</head>
<body style="background-image: url('./img/jess-bailey-q10VITrVYUM-unsplash.jpg'); background-size: cover;">
<!-- Page heading -->
<h1 style="text-align: center;  margin-top: 50px;  margin-bottom: -50px;">ADCRAFT</h1>
<!-- Container for the form -->
<div class="container">
    <div class="box form-box">

        <?php 
            // Including configuration file
            include("php/config.php");
            // Checking if form is submitted
            if(isset($_POST['submit'])){
                // Retrieving form data
                $username = $_POST['username'];
                $email = $_POST['email'];
                $Mobile = $_POST['mobile'];
                $password = $_POST['password'];

                // Verifying unique email
                $verify_query = mysqli_query($con,"SELECT Email FROM users1 WHERE Email='$email'");
                // If email already exists
                if(mysqli_num_rows($verify_query) !=0 ){
                    echo "<div class='message'>
                              <p>This email is used, Try another One Please!</p>
                          </div> <br>";
                    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                } else {
                    // Inserting new user data into the database
                    mysqli_query($con,"INSERT INTO users1(Username,Email,Phone,Password) VALUES('$username','$email','$Mobile','$password')") or die("Error Occurred");
                    // Registration success message
                    echo "<div class='message'>
                              <p>Registration successful!</p>
                          </div> <br>";
                    echo "<a href='index.php'><button class='btn'>Login Now</button>";
                }
            } else {
        ?>

        <!-- Sign up form -->
        <header>Sign Up</header>
        <form action="" method="post">
            <div class="field input">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="age">Mobile</label>
                <input type="text" name="mobile" id="mobile" autocomplete="off" required>
            </div>
            <div class="field input">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" autocomplete="off" required>
            </div>

            <div class="field">
                <input type="submit" class="btn" name="submit" value="Register" required>
            </div>
            <!-- Login link -->
            <div class="links">
                Already a member? <a href="index.php">Sign In</a>
            </div>
        </form>
    </div>
    <?php } ?>
</div>
</body>
</html>
