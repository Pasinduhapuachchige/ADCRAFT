<?php

session_start();

//database connection
require 'config.php';

//read data from users and store inside variables
$userCode= $_POST["inquiryCode"];

//delete query
$sql= "DELETE FROM inquiry_information WHERE Ref_Code='$userCode'";

//condition to check whether the query is successfully executed
if($conn->query($sql))
{
    echo $delete="<script>alert('Your inquiry was deleted successfully!')</script>";

    if($delete==true)
    {
        include ('deleteform.php');
    }
}
else {
    echo "Error!Try again!".$conn->error;
}

//close DB connection
$conn->close();

?>