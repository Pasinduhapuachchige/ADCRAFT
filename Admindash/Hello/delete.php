<?php

include 'connect.php';

if(isset($_GET['deleteid'])){
    
    $id = $_GET['deleteid'];

    $sql = "delete from announcement where Announcement_id = $id";
    $result = mysqli_query($con,$sql);

    if($result){

        //echo "Deleted successfully";
        //header('location:display.php');
        echo "<script>alert('Data deleted successfully!!'); window.location='display.php';</script>";
    }
    else{
        die(mysqli_error($con));
    }
}

?>