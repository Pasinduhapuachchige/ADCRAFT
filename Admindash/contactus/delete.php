<?php
include 'db_con.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM contact WHERE id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
        echo "<script>alert('Data updated successfully!!'); window.location='display.php';</script>";
    }
    else{
        die(mysqli_error($con));
    }
}
?>
