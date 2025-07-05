<?php

$conn=new mysqli('localhost','root','','testweb_login');

if($conn->connect_error)
{
    echo "Connection Error".$conn->connect_error;
}

?>