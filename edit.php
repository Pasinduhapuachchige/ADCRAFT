<?php 
   // Start session
   session_start();

   // Include database configuration
   include("php/config.php");

   // Redirect to login if session is not valid
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Change Profile</title>
</head>
<body style="background-image: url(./img/jess-bailey-q10VITrVYUM-unsplash.jpg); background-size: cover;">
    <!-- Navigation -->
    <div class="nav">
        <div class="logo">
            <p><a href="Home1.php">ADCRAFT</a></p>
        </div>

        <div class="right-links">
            <!-- Logout button -->
            <a href="php/logout.php"> <button class="btn">Log Out</button> </a>
        </div>
    </div>
    <div class="container">
        <div class="box form-box">
            <?php 
               // If update button is clicked
               if(isset($_POST['update'])){
                // Get form data
                $username = $_POST['username'];
                $email = $_POST['email'];
                $mobile = $_POST['mobile'];
                $id = $_SESSION['id'];

                // Update user data in the database
                $edit_query = mysqli_query($con,"UPDATE users1 SET Username='$username', Email='$email', Phone='$mobile' WHERE Id=$id ") or die("error occurred");

                // Display success message if update is successful
                if($edit_query){
                    echo "<div class='message'>
                    <p>Profile Updated!</p>
                </div> <br>";
                echo "<a href='Home1.php'><button class='btn'>Go Home</button>";
                }
               } 
               // If delete button is clicked
                if(isset($_POST['delete'])){
                    $id = $_SESSION['id'];
                    // Delete user account from the database
                    $delete_query = mysqli_query($con,"DELETE FROM users1 WHERE Id=$id ") or die("error occurred");

                    // Display success message if deletion is successful
                    if($delete_query){
                        session_destroy();
                        echo "<div class='message'>
                        <p>Profile Deleted!</p>
                        </div> <br>";
                        echo "<a href='register.php'><button class='btn'>Go to Login</button>";
                    }
                    // JavaScript alert for account deletion
                    echo '<script>alert("Account deleted Successfully.");</script>';
               } 
            //    // Display profile change form
               else {

                $id = $_SESSION['id'];
                // Fetch user data for display
                $query = mysqli_query($con,"SELECT * FROM users1 WHERE Id=$id ");

                while($result = mysqli_fetch_assoc($query)){
                    $res_Uname = $result['Username'];
                    $res_Email = $result['Email'];
                    $res_Mobile = $result['Phone'];
                }

            ?>
            <!-- Profile change form -->
            <header>Change Profile</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="<?php echo $res_Uname; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" value="<?php echo $res_Email; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Mobile</label>
                    <input type="text" name="mobile" id="mobile" value="<?php echo $res_Mobile; ?>" autocomplete="off" required>
                </div>
                
                <div class="field">
                    <!-- Submit buttons for update and delete actions -->
                    <input type="submit" class="btn" name="update" value="Update" required>
                    <input type="submit" class="btn" name="delete" value="Remove Account" required>
                </div>
                
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>
