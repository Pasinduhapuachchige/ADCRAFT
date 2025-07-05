<?php
require 'config.php';

$id=$_POST["id"];
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$password=$_POST["password"];
$jobposition=$_POST["jobposition"];
$mobile=$_POST["mobile"];

$sql="INSERT INTO applicant1 VALUES ('$id','$firstname','$lastname','$email','$password','$jobposition','$mobile')";

if($con->query($sql))
{
    echo "<script>alert('Data added successfully!!'); window.location='index1.php';</script>";
}
else{
    echo "Error.$con->error";
}
$con->close();

?>