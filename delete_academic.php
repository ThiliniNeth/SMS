<?php
require_once("connection/connection.php");

if(isset($_POST['delete'])) {
    $email = $_POST['email'];

    $query = "DELETE FROM `academic_officer` WHERE `email` = ?";
    $stmt = mysqli_prepare($con, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 's', $email);

        if (mysqli_stmt_execute($stmt)) {
            echo '<script>alert("Academic Officer deleted successfully")</script>';
        } else {
            echo 'Failed to delete Academic Officer : ' . mysqli_error($con);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo 'Failed to prepare the statement';
    }
}

header("Location: manage_academic.php"); 
