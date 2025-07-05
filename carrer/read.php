<?php
require 'config.php';

$sql="SELECT Id,First Name,Last Name,E-mail,Password,Job Position,Mobile Number FROM applicant1";

$result=$con->query($sql);

if($result->num_rows>0)
{
   while($row=$result->fetch_assoc())
   {
    echo $row["Id"]."".$row["FirstName"]." ".$row["LastName"]." ".$row["E-mail"]." ".$row["Password"]." ".$row["JobPosition"]." ".$row["MobileNumber"]."<br>";
   }
}
else{
    echo "No results";
}

$con->close()
?>