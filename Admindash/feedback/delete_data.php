<?php
require '../Hello/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
    $id = $_POST["id"];

    // Delete the record from the database
    $sql = "DELETE FROM greetings WHERE id=$id";

    if ($con->query($sql) === TRUE) {
        echo "<script>alert('Data updated successfully!!'); window.location='admin.php';</script>";
    } else {
        echo "Error deleting record: " . $con->error;
    }
}

$con->close();
?>
