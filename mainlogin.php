
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>School Management System</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="pics/logo bg remove.png" />
</head>

<body>
    
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-10 shadow-lg mt-5">
                <form action ="mainlogin.php" method="POST">
                    <div class="row">
                        <div class="col-6 mt-2 mb-2 mx-auto">
                            <img src="pics/logo1.png" class="w-100">
                        </div>
                        
                        <div class="col-6">
                            <h1 class="text-center fw-bolder mt-5 mb-5"> Login</h1>
                            <div class="row justify-content-center">
                                <div class="col-8">
                                    <div class="row">
                                    <?php if (isset($_POST['error'])){ ?>
                                    <div class="alert alert-danger" role="alert">
                                     <?=$_POST['error']?>
                                        </div>
                                    <?php } ?>
                                        <label class="fw-bolder">UserName</label>
                                        <input type="text" class="form-control mt-2" placeholder="Enter Your UserName" name="username">
                                        <label class="fw-bolder mt-3">Password</label>
                                        <input type="password" class="form-control mt-2 " placeholder="Enter Your Password" name="password">
                                                    
                                                    <label class="fw-bolder mt-3">Login As</label>
                                                        <select class="form-control  mt-2 mb-4" name="role">
                                                            <option value="1">Admin</option>
                                                            <option value="2">Teacher</option>
                                                            <option value="3">Student</option>
                                                            <option value="4">Academic Officer</option>
                                                        </select>
                                                    </div>
                                        
                                            <button type="submit" class=" form-control btn btn-outline-dark mt-3 fw-bolder" name="submit">Sign In</button>
                                           
                                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    
    <script src="bootstrap.bundle.js"></script>
    <script src="scripts.js"></script>
 
</body>
</html>

<?php
// Your PHP code here

require_once("connection/connection.php");
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    if (empty($username)) {
        $em = "Username is required";
        header("Location: mainlogin.php?error=$em");
        exit;
    } else if (empty($password)) {
        $em = "Password is required";
        header("Location: mainlogin.php?error=$em");
        exit;
    } else if (empty($role)) {
        $em = "An error Occurred";
        header("Location: mainlogin.php?error=$em");
        exit;
    } else {
        // Use prepared statements for SQL queries
        if ($role == '1') {
            $sql1 = "SELECT * FROM admin WHERE username = ?";
            $role = "admin";
        } else if ($role == '2') {
            $sql1 = "SELECT * FROM teacher WHERE username = ?";
            $role = "teacher";
        } else if ($role == '3') {
            $sql1 = "SELECT * FROM student WHERE username = ?";
            $role = "student";
        } else if ($role == '4') {
            $sql1 = "SELECT * FROM academic_officer WHERE username = ?";
            $role = "academic";
        }

        $stmt1 = mysqli_prepare($con, $sql1);
        mysqli_stmt_bind_param($stmt1, "s", $username);
        mysqli_stmt_execute($stmt1);
        $result1 = mysqli_stmt_get_result($stmt1);

        if (mysqli_num_rows($result1) === 1) {
            $row = mysqli_fetch_assoc($result1);
            if ($row['username'] === $username && $row['password'] === $password) {
                echo '<script>alert("Success")</script>';
                header("Location: " . strtolower($role) . "_dashboard.php");
                exit();
            }
        } else {
            echo '<script>alert("Failed to login")</script>';
        }
    }
}



 
    
?>