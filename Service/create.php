<?php

session_start();

//Database connection
require 'config.php'; 

//Retrieve data from users and store inside variables
$userCode = $_POST["inquiryCode"];
$userEmail = $_POST["inquiryEmail"];
$userService = $_POST["inquiryService"];
$userPreferences = $_POST["inquiryMessage"];

//condition to check whether any field is empty
if(empty($userCode)||empty($userEmail)||empty($userService)||empty($userPreferences))
{
    echo $fields ="<script>alert('All Required!')</script>";
    if($fields==true){
        include('inquiryform.php');
    }
}
else
{
    //insert data into database
    $sql = "INSERT INTO inquiry_information VALUES ('','$userCode', '$userEmail', '$userService', '$userPreferences')";

    //condition to check whether the query is successfully executed
    if ($conn->query($sql))
    {
        echo $result1 = "<script>alert('Your response was submitted successfully!')</script>";
        if($result1==true)
        {
            include ('inquiryform.php');
        }
    } else
    {
        echo "Error!Try again!".$conn->error;
    }
}

//close DB connection
$conn->close();

?>