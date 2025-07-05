<?php
require '../Hello/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update1"])) {
    $id = $_POST["id"];
    $name = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Update the data in the database
    $sql = "UPDATE users1 SET Username='$name', Email='$email',Phone='$phone' WHERE id=$id";

    if ($con->query($sql) === TRUE) {
        echo "<script>alert('Data updated successfully!!'); window.location='admin.php';</script>";
    } else {
        echo "Error updating record: " . $con->error;
    }
}

$con->close();
?>
