<?php

$con=new mysqli("localhost","root","","testweb_login");

if($con->connect_error)
{
    die("Connection failed".$con->connect_error);
}



?>