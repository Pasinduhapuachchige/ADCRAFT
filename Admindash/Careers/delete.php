<?php
// Including the configuration file to establish a database connection
include 'config.php';

// Checking if the 'deleteid' parameter is set in the GET request
if(isset($_GET['deleteid'])){
    // Retrieving the 'deleteid' value from the GET request
    $id = $_GET['deleteid'];

    // Constructing the SQL query to delete the record with the specified ID from the 'applicant1' table
    $sql = "DELETE FROM applicant1 WHERE Id = $id";
    
    // Executing the SQL query using mysqli_query
    $result = mysqli_query($con, $sql);

    // Checking if the deletion was successful
    if($result){
        // Displaying an alert message using JavaScript to inform the user that the data was deleted successfully
        // Redirecting the user to 'front.php' after the deletion
        echo "<script>alert('Data deleted successfully!!'); window.location='front.php';</script>";
    } else {
        // If there's an error during the deletion process, terminating the script execution and displaying the MySQL error message
        die(mysqli_error($con));
    }
}
?>
