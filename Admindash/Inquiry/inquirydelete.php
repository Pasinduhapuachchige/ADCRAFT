<?php

require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
    $iqid = $_POST["id"];

    // Delete the record from the database
    $sql = "DELETE FROM inquiry_information WHERE Inquiry_ID=$iqid";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data updated successfully!!'); window.location='adminview.php';</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
