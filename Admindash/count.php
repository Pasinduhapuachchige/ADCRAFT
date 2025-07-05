<?php

include 'Hello/connect.php';


function getCount($tablename)
{
    global $con;

    $table = $tablename;
    $query = "SELECT * FROM $table";
    $result = mysqli_query($con,$query);

    $totalCount = mysqli_num_rows($result);

    return $totalCount;
}




?>