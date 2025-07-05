<?php

session_start();

//Database connection
require 'config.php';

//Retrieve data from users and store inside variables
$userID=$_POST["inquiryID"];
$userCode= $_POST["inquiryCode"];
$updateService = $_POST["inquiryService"];
$updateUserPreferences = $_POST["inquiryMessage"];

//update query
$sql = "UPDATE inquiry_information SET Service_Category='$updateService', User_Preference='$updateUserPreferences' WHERE Ref_Code='$userCode' AND Inquiry_ID='$userID'";

//condition to check whether the query is successfully executed
if ($conn->query($sql))
{
    echo $update = "<script>alert('Your inquiry was updated successfully!')</script>";
    if($update==true)
    {
        include ('updateform.php');      
    }

} else {
    echo "Error!Try again!".$conn->error;
}

//close DB connection
$conn->close();


?>