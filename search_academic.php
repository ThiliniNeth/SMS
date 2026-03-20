<?php

require_once("connection/connection.php");

if (isset($_POST['search'])) {
    $searchTerm = $_POST['email'];

    $query = "SELECT * FROM `academic_officer` WHERE `email` LIKE ? ";
    $stmt = mysqli_prepare($con, $query);

    if ($stmt) {
        $searchTerm = '%' . $searchTerm . '%'; 
        mysqli_stmt_bind_param($stmt, 's', $searchTerm);

        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);

           
            while ($row = mysqli_fetch_assoc($result)) {
               
                echo 'Email: ' . $row['email'] . '<br>';
                echo 'First Name: ' . $row['fname'] . '<br>';
                echo 'Last Name: ' . $row['lname'] . '<br>';
                echo 'Contact: ' . $row['contact'] . '<br>';
                echo 'Gender: ' . $row['gender'] . '<br>';
                echo 'UserName: ' . $row['username'] . '<br>';
                echo 'Password: ' . $row['password'] . '<br>';
                echo 'DOB: ' . $row['dob'] . '<br>';
                
                echo '<hr>';
            }
        } else {
            echo 'Failed to execute the search query: ' . mysqli_error($con);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo 'Failed to prepare the statement';
    }
}
?>
