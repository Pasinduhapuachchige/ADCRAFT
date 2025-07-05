<?php
require '../Hello/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    // Retrieve user id from form data
    $id = $_POST['id'];

    // Delete user data from the database
    $sql = "DELETE FROM users1 WHERE id='$id'";
    if ($con->query($sql) === TRUE) {
        echo "<script>alert('Data deleted successfully!!'); window.location='admin.php';</script>";
    } else {
        echo "Error deleting record: " . $con->error;
    }
}

?>
