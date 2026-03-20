<?php


if (isset($_POST['update'])) {
  
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];

    $query = "UPDATE `teacher` SET  `fname`=?, `lname`=?, `contact`=?, `gender`=?, `username`=?, `password`=?, `dob`=? WHERE `email`=?";
    $stmt = mysqli_prepare($con, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 'ssssssss', $email, $fname, $lname, $contact, $gender, $username, $password, $dob);

        if (mysqli_stmt_execute($stmt)) {
            echo '<script>alert("Teacher Updated Successfully")</script>';
        } else {
            echo 'Failed to update Teacher: ' . mysqli_error($con);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo 'Failed to prepare the statement';
    }
}


header("Location: manage_teacher.php");
?>
