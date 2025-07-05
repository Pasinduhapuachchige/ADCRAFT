<?php
include 'db_con.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM contact WHERE id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
        //echo "Deleted successfully";
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>
