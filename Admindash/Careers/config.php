<?php

$con = new mysqli("localhost","root","","testweb_login");

if(!$con)
{
    die(mysqli_error($con));
}