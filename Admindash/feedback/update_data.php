<?php
require '../Hello/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {
    $id = $_POST["id"];
    $name = $_POST["message"];

    // Update the data in the database
    $sql = "UPDATE greetings SET message='$name' WHERE id=$id";

    if ($con->query($sql) === TRUE) {
        echo "<script>alert('Data updated successfully!!'); window.location='admin.php';</script>";
    } else {
        echo "Error updating record: " . $con->error;
    }
}

$con->close();
?>
